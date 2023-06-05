<?php
//verifica se foi enviado os dados de usuário e senha do formulario
if(isset($_POST['usuario']) and isset($_POST['senha'])){

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

require_once "../conexao.php";

//string com o comando slq para ser executado no db
$sql = "SELECT * FROM `usuario` WHERE  `login`= ? ;"; 

//prepara o sql para ser executado  no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("s", $usuario);

//executa o sql - comando no banco de dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();

//pegar a primeira linha de resultados
$usuario = $resultado->fetch_assoc();

if($usuario){
    if(password_verify($senha, $usuario['senha'])){
        
        //inicia sessao
        session_start();

        //cria a variavel de sessao
        $_SESSION['usuario'] = $usuario;

        //redireciona para produtos
        header("Location: ../produto/index.php");

    }else{
        $erro_login = "senha incorreta";
    }
}else{
    $erro_login = "não existe usuário com o login informado";
}

}
