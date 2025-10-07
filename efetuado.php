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
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar bg-light-subtle border-bottom border-black sticky-top">
        <div class="container-fluid">
            <a class="h3" href="#" style="text-decoration: none; font-weight: bolder;">WEB APP</a>
            <button class="btn btn-primary btn-sm"
                onclick="document.documentElement.setAttribute('data-bs-theme', document.documentElement.getAttribute('data-bs-theme') === 'dark' ? 'light' : 'dark')">
                Alternar Tema
            </button>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="alert alert-success">
                    <h4>Bem-vindo, <b>@<?php echo $_SESSION['nome']; ?></b>!</h4>
                </div>
                <form action="logout.php" method="POST">
                    <button type="submit" class="btn btn-danger btn-lg">
                        <i class="bi bi-arrow-left fs-6"></i>&nbsp;Sair
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Cards -->
    <div class="container mt-3">
        <!-- g-4: espaçamento entre colunas / align-items-stretch: iguala altura -->
        <div class="row g-4 align-items-stretch">

            <!-- Cada coluna usa d-flex e o card usa h-100 -->
            <div class="col-12 col-md-4 d-flex">
                <div class="card h-100 w-100">
                    <img src="https://www.radiomensagem.am.br/noticiasimg/14092021045842.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="mb-3">
                            <h5 class="card-title fw-bold">Parque Vicentina Aranha</h5>
                            <p class="card-text">Espaço arborizado e histórico, ótimo para caminhadas e descanso.</p>
                        </div>
                        <a href="#" class="btn btn-primary mt-auto">Marcar</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 d-flex">
                <div class="card h-100 w-100">
                    <img src="https://valenews.com.br/wp-content/uploads/2022/07/ParquedaCidadeSJC26072022ClaudioVieiraPMSJC.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title fw-bold">Parque da Cidade</h5>
                            <p class="card-text">Parque urbano com lagos, trilhas e áreas para lazer e esportes.</p>
                        </div>
                        <a href="#" class="btn btn-primary mt-auto">Marcar</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 d-flex">
                <div class="card h-100 w-100">
                    <img src="https://img.cdndsgni.com/preview/10834174-m.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title fw-bold">Praça Riugi Kojima</h5>
                            <p class="card-text">Praça moderna com jardins e esculturas, ideal para encontros.</p>
                        </div>
                        <a href="#" class="btn btn-primary mt-auto">Marcar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>