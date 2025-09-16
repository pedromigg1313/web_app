<?php 
include 'conexao.php';

if(isset($_POST['email']) && isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha o seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha a sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container mt-3 pb-2 bg-black bg-opacity-25 rounded-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center mb-4 mt-2" style="font-weight: bolder">Cadastrar-se</h3>
                <form method="POST" action="login_cad.php">
                    <div class="mb-3">
                        <label for="email" class="form-label">Nome</label>
                        <input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com"  name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com"  name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="12345" name="senha" required>
                        <div class="form-check mt-1">
                            <input class="form-check-input" type="checkbox" id="mostrarSenha" onclick="document.getElementById('senha').type = this.checked ? 'text' : 'password'">
                            <label class="form-check-label" for="mostrarSenha">Mostrar senha</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Ratifique a sua Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="12345" name="senha" required>
                        <div class="form-check mt-1">
                            <input class="form-check-input" type="checkbox" id="mostrarSenha" onclick="document.getElementById('senha').type = this.checked ? 'text' : 'password'">
                            <label class="form-check-label" for="mostrarSenha">Mostrar senha</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-4">Efetuar</button>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>