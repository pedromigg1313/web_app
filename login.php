<?php 
session_start();
include('conexao_db.php');

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $conexao->real_escape_string($_POST['email']);
    $senha = $conexao->real_escape_string($_POST['senha']);
    
    // Verificar se a conta está bloqueada
    $check_bloqueio = "SELECT * FROM usuarios WHERE login = '$email' AND bloqueado_ate > NOW()";
    $result_bloqueio = $conexao->query($check_bloqueio);
    
    if ($result_bloqueio->num_rows > 0) {
        header('Location: entrar.php?error=3'); // Conta bloqueada
        exit();
    }

    $sql = "SELECT * FROM usuarios WHERE login = '$email' AND senha = '$senha'";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        
        // Resetar tentativas em caso de sucesso
        $reset_sql = "UPDATE usuarios SET tentativas_login = 0, bloqueado_ate = NULL WHERE login = '$email'";
        $conexao->query($reset_sql);
        
        $_SESSION['nome'] = $usuario["nome"];
        $_SESSION['email'] = $usuario["login"];
        
        // Atualizar quantidade de acessos
        $update_sql = "UPDATE usuarios SET quant_acesso = quant_acesso + 1 WHERE login = '$email'";
        $conexao->query($update_sql);
        
        header('Location: efetuado.php');
    } else {
        // Incrementar tentativas falhas
        $update_tentativas = "UPDATE usuarios SET tentativas_login = tentativas_login + 1 WHERE login = '$email'";
        $conexao->query($update_tentativas);
        
        // Verificar se atingiu 3 tentativas
        $check_tentativas = "SELECT tentativas_login FROM usuarios WHERE login = '$email'";
        $result_tentativas = $conexao->query($check_tentativas);
        
        if ($result_tentativas->num_rows > 0) {
            $dados = $result_tentativas->fetch_assoc();
            if ($dados['tentativas_login'] >= 3) {
                // Bloquear conta por 30 minutos
                $bloqueio_sql = "UPDATE usuarios SET bloqueado_ate = DATE_ADD(NOW(), INTERVAL 30 MINUTE) WHERE login = '$email'";
                $conexao->query($bloqueio_sql);
                header('Location: entrar.php?error=3'); // Conta bloqueada
            } else {
                header('Location: entrar.php?error=1&tentativas=' . (3 - $dados['tentativas_login']));
            }
        } else {
            header('Location: entrar.php?error=1');
        }
    }
    
    $conexao->close();
}
?>