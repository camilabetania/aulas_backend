<?php

require_once "../conexao.php";

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$foto = "semfoto.png";

//string com o comando slq para ser executado no db
$sql = "INSERT INTO `produto` (`nome`, `preco`, `descricao`, `foto`) 
VALUES (?, ?, ?, ?);";
echo $sql; 

//prepara o sql para ser executado  no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("sdss", $nome, $preco, $descricao, $foto);

//executa o sql - comando no banco de dados
$comando->execute();

//abre o arquivo form.php
//header("Location: form.php");