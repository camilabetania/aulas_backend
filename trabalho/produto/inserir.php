
<?php

require_once "../conexao.php";


//inclui o arquivo para salvar a foto do upload


$data = $_POST["data"];
$valor = $_POST["valor"];
$produto = $_POST["produto"];
$cliente = $_POST["cliente"];

//string com o comando slq para ser executado no db
$sql = "INSERT INTO `vendas` (`data`, `valor`, `produto`, `cliente`) 
VALUES (?, ?, ?, ?);"; 

//prepara o sql para ser executado  no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("sdss", $data, $valor, $produto, $cliente);

//executa o sql - comando no banco de dados
$comando->execute();


//abre o arquivo form.php
header("Location: index.php");