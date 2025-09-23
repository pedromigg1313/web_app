<?php 
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $database = 'bd_crud_php';

    $conexao = new mysqli($host, $usuario, $senha, $database);

    if($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error); 
    }
?>