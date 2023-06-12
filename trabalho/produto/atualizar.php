
<?php

require_once "../conexao.php";

$id = $_POST["id"];
$data = $_POST["data"];
$valor = $_POST["valor"];
$produto = $_POST["produto"];
$cliente = $_POST["cliente"];

//string com o comando slq para ser executado no db
$sql = "UPDATE vendas SET 
`data`=?, `valor`=?, `produto`=?, `cliente`=? WHERE  `idvenda`=?"; 

//prepara o sql para ser executado  no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("sdssi", $data, $valor, $produto, $cliente, $id);

//executa o sql - comando no banco de dados
$comando->execute();

//abre o arquivo form.php
header("Location: index.php");