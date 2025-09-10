<?php 

$usuario = 'root';
$senha = '';
$database = '';
$host = '';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->connect_errno) {
    die("Falha ao conectar ao MySQL: " . $mysqli->connect_error); 
}
?>