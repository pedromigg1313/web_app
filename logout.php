<?php 
session_start();
unset($_SESSION['usuário']);
unset($_SESSION['nome']);
unset($_SESSION['tipo']);
session_destroy();
header("Location: entrar.php");
exit();
?>