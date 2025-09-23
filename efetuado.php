<?php 
session_start();
include('conexao_db.php');

if (!isset($_SESSION['email'])) {
    header('Location: entrar.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Logada</title>
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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="alert alert-success shadow">
                    <h4>Bem vindo, <b>@<?php echo $_SESSION['nome']; ?></b>!</h4>
                </div>
                <form action="logout.php" method="POST">
                    <button type="submit" class="btn btn-danger btn-lg">Sair</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>