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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'estrutura/navbar.php' ?>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 text-center">
                <div class="alert alert-success">
                    <h4>Bem vindo, <b>@<?php echo $_SESSION['nome']; ?></b>!</h4>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <form action="logout.php" method="POST">
                                <button type="submit" class="btn btn-danger btn-lg"><i
                                        class="bi bi-arrow-left fs-6"></i>&nbsp;Sair</button>
                            </form>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-lg" onclick="window.location.href='marcar.php'">Marcar Evento</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="h3 text-center mt-3"><i class="bi bi-calendar-event fs-4"></i>&nbsp;Principais locais que terão eventos futuramente</p>
    <div class="d-flex justify-content-center align-items-center mt-2">
        <div id="carouselExampleIndicators" class="carousel slide w-75 rounded">
            <!-- COMEÇO Indicadores -->
            <div class="carousel-indicators">
                <div class="bg-dark bg-opacity-75" style="border-radius: 5px;">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active bg-light" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        class="bg-light" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        class="bg-light" aria-label="Slide 3"></button>
                </div>
            </div>
            <!-- FIM Indicadores -->

            <!-- COMEÇO Slide  -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagem/img_1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="background-color: #0000007e; display: inline; color: white;">Praça Riugi Kojima</h5>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imagem/img_2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="background-color: #0000007e; display: inline; color: white;">Parque da Cidade</h5>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imagem/img_3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5 style="background-color: #0000007e; display: inline; color: white;">Vicentina Aranha</h5>
                        <p></p>
                    </div>
                </div>
            </div>
            <!-- FIM Slide -->

            <!-- COMEÇO Legendas -->
            <button class="carousel-control-prev ms-2" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <div class="bg-dark bg-opacity-75 p-2" style="border-radius: 5px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </div>
            </button>
            <button class="carousel-control-next me-2" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <div class="bg-dark bg-opacity-75 p-2" style="border-radius: 5px;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </div>
            </button>
        </div>
        <!-- FIM Legendas -->
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script>
        document.querySelectorAll('.carousel-control-prev, .carousel-control-next').forEach(function (button) {
            button.addEventListener('click', function () {
                // Remove o foco do botão clicado
                this.blur();
            });
        });
    </script>
</body>

</html>