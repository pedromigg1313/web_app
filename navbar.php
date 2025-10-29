<?php
$pagina_atual = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar bg-light-subtle border-bottom border-black sticky-top">
    <div class="container-fluid">
        <a class="h1" href="efetuado.php" style="text-decoration: none; font-family: BBH Sans Bogle; letter-spacing: 3px; font-weight: bolder;">Eventos BR</a>
        <?php if ($pagina_atual == 'marcar.php'): ?>
            <button class="btn btn-primary btn-sm" onclick="window.location.href='efetuado.php'">Voltar</button>
        <?php endif; ?>
        <button class="btn btn-primary btn-sm" onclick="document.documentElement.setAttribute('data-bs-theme', document.documentElement.getAttribute('data-bs-theme') === 'dark' ? 'light' : 'dark')">Alternar Tema</button>
    </div>
</nav>