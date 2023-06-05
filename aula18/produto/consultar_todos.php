<?php

require_once "../conexao.php";

//string com o comando slq para ser executado no db
$sql = "SELECT * FROM `produto` where categoria like %?%"; 

//prepara o sql para ser executado  no banco de dados
$comando = $conexao->prepare($sql);

$categoria = $_GET['categoria'] ?? "";
$comando->bind_param("s", $categoria);

//executa o sql - comando no banco de dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();

//cria um vetor vazio
$produtos = [];

//pega todas as linhas do resultado
while($produto = $resultado->fetch_assoc()){
    //adiociona o produto (linha do resultado) no vetor
    $produtos[] = $produto;
}