<?php

require_once "../conexao.php";

//string com o comando slq para ser executado no db
$sql = "SELECT * FROM `usuario`"; 

//prepara o sql para ser executado  no banco de dados
$comando = $conexao->prepare($sql);

//executa o sql - comando no banco de dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();

//cria um vetor vazio
$usuarios = [];

//pega todas as linhas do resultado
while($usuario = $resultado->fetch_assoc()){
    //adiociona o produto (linha do resultado) no vetor
    $usuarios[] = $usuario;
}