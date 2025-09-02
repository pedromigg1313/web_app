<?php
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web App</title>
    <link rel="styleheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="card p-2">
        <h3 class="mb-4 text-center"><i class="bi bi-door-open-fill"></i>Cadastrar-se</h3>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control focus-ring focus-ring-dark " id="email" placeholder="Digite o seu e-mail" required style="border-color: black;"/>
                </div>
                <div class="mb-3 position-relative">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control focus-ring focus-ring-dark" id="senha" placeholder="Crie uma Senha" required style="border-color: black;"/>
                <i class="bi bi-eye-fill position-absolute" id="togglePassword" style="top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input focus-ring focus-ring-primary" id="lembrar" style="border-color: rgb(0, 0, 239);"/>
                <label class="form-check-label" for="lembrar">Lembrar-me</label>
            </div>
            <button type="submit" class="btn btn-dark text-white w-100">Entrar</button>
        </form>
        <div class="mt-3 text-center">
            <a href="#" class="link small">Esqueceu a senha?</a> | <a href="#" class="link small">Criar uma conta</a>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        let togglePassword = document.getElementById('togglePassword')
        let senhaInput = document.getElementById('senha')
        
        togglePassword.addEventListener('click', function() {
            let isPassword = senhaInput.type === 'password'
            senhaInput.type = isPassword ? 'text' : 'password'
        })     
    </script>
</body>
</html>