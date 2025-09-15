<?php 

    $usuario = 'root';
    $senha = '';
    $database = 'bd_crud_php';
    $host = 'localhost';

    $mysqli = new mysqli($usuario, $senha, $database, $host);

    if($mysqli->connect_errno) {
        die("Falha ao conectar ao MySQL: " . $mysqli->connect_error); 
}