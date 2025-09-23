<?php
session_start();
if (isset($_GET['error'])) {
    echo '<div class="alert alert-danger">Erro no cadastro. Tente novamente.</div>';
}
if (isset($_GET['success'])) {
    echo '<div class="alert alert-success">Cadastro realizado com sucesso! Faça login.</div>';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar bg-black bg-opacity-10 border-bottom border-black">
        <div class="container-fluid">
            <a class="h3" href="#" style="text-decoration: none; font-weight: bolder;">WEB APP</a>
            <button class="btn btn-primary btn-sm" onclick="document.documentElement.setAttribute('data-bs-theme', document.documentElement.getAttribute('data-bs-theme') === 'dark' ? 'light' : 'dark')">Alternar Tema</button>
        </div>
    </nav>
    <div class="container mt-3 pb-2 bg-black bg-opacity-25 rounded-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center mb-4 mt-2" style="font-weight: bolder">Cadastrar-se</h3>
                
                <?php
                if (isset($_GET['error'])) {
                    echo '<div class="alert alert-danger">Erro no cadastro. Tente novamente.</div>';
                }
                ?>
                
                <form action="login_cad.php" method="POST">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Seu nome completo" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="Crie uma senha" name="senha" required>
                        <div class="form-check mt-1">
                            <input class="form-check-input" type="checkbox" id="mostrarSenha" onclick="
                                document.getElementById('senha').type = this.checked ? 'text' : 'password';
                            ">
                            <label class="form-check-label" for="mostrarSenha">Mostrar senha</label>
                        </div>
                    </div>
                    <a href="entrar.php" style="text-decoration: none">Já está cadastrado? Entrar</a>
                    <br><br>
                    <button type="submit" class="btn btn-primary w-100 mb-4">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>