<?php 
    session_start();
    if(empty($_POST) or (empty($_POST['usuario']) or empty($_POST['senha']))){
        header("Location: index.php");
    }

    include_once("conection_db.php");

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios
        WHERE usuario = '{$usuario}'
        AND senha = '{$senha}'";

    $result = $conn->query($sql) or die($conn->error);

    $row = $result->fetch_object();

    $qtd = $result->num_rows;

    if($qtd > 0){
        $_SESSION['usuario'] = $usuario;
        $_SESSION['nome'] = $row->nome;
        $_SESSION['tipo'] = $row->tipo;
        header("Location: efetuado.php");
    } else {
        header("Location: index.php");
    }
?>