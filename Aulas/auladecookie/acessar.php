<?php
session_start();
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    if(($usuario == "admin") && ($senha == "123")){
        $_SESSION['acesso'] = true;
        $_SESSION['nome_usuario'] = "Adiministrador";
        header('Location: principal.php');
    }else {
        header('Location: index.php?acesso=negado');
        exit;
    }