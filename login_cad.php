<?php
include('conexao_db.php');

if (isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['nome'])) {
    $nome = $conexao->real_escape_string($_POST['nome']);
    $email = $conexao->real_escape_string($_POST['email']);
    $senha = $conexao->real_escape_string($_POST['senha']);
    
    $check_sql = "SELECT * FROM usuarios WHERE login = '$email'";
    $result = $conexao->query($check_sql);
    
    if ($result->num_rows > 0) {
        echo "Este email já está cadastrado!";
    } else {
        $sql = "INSERT INTO usuarios (login, senha, nome, tipo, quant_acesso, status) 
                VALUES ('$email', '$senha', '$nome', '1', 0, 'A')";
        
        if ($conexao->query($sql)) {
            header('Location: entrar.php?success=1');
        } else {
            echo "Erro ao cadastrar: " . $conexao->error;
        }
    }
    
    $conexao->close();
}
?>