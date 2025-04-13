<?php
session_start();

// usuario fixo
$usuario_correto = "admin";
$senha_correta = "1234";

//Dados do formulario
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//verifica login 
if($usuario === $usuario_correto && $senha === $senha_correta) {
    $_SESSION['usuario'] = $usuario;
    header("Location: painel.php");
    exit();
}else{
    header("Location: index.php?erro=1");
    exit();
}