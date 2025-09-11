<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mudar Senha</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3 class="text-center mb-4">Mudar Senha</h3>
                <form method="POST" action="login.php">
                    <div class="mb-3">
                        <label for="senha_atual" class="form-label">Senha Atual</label>
                        <input type="password" class="form-control" id="senha_atual" name="senha_atual" required>
                        <div class="form-check mt-1">
                            <input class="form-check-input" type="checkbox" id="mostrarSenhaAtual" onclick="document.getElementById('senha_atual').type = this.checked ? 'text' : 'password'">
                            <label class="form-check-label" for="mostrarSenhaAtual">Mostrar senha</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nova_senha" class="form-label">Nova Senha</label>
                        <input type="password" class="form-control" id="nova_senha" name="nova_senha" required>
                        <div class="form-check mt-1">
                            <input class="form-check-input" type="checkbox" id="mostrarNovaSenha" onclick="document.getElementById('nova_senha').type = this.checked ? 'text' : 'password'">
                            <label class="form-check-label" for="mostrarNovaSenha">Mostrar senha</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Alterar</button>
                </form>
                <div class="mt-3 text-center">
                    <a href="entrar.php">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>