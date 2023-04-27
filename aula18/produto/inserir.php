<?php

require_once "../conexao.php";

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];

//string com o comando slq para ser executado no db
$sql = "INSERT INTO `produto` (`nome`, `preco`, `descricao`, `foto`) 
VALUES ('$nome', '$preco', '$descricao', 'semfoto.png');";
echo $sql; 

//prepara o sql para ser executado  no banco de dados
$comando = $conexao->multi_query($sql);

//adiciona os valores nos parâmetros
//$comando->bind_value("ssds", "a", "b", 1, "c");

//executa o sql - comando no banco de dados
//$comando->execute();

//abre o arquivo form.php
//header("Location: form.php");