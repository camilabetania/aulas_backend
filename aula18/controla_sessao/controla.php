<?php
//sempre que for trabalhar com sessoes é necessario
//iniciar a sessao
session_start();

//verifica se existe a variavel de sessao chamada usuario
if(!isset($_SESSION['usuario'])){
    header("Location: ../site/login.php");
}

?>