
<?php

require_once "../conexao.php";

if(isset($_POST["nome"]) && isset($_POST["descricao"]) && isset($_POST["preco"]))
{

//inclui o arquivo para salvar a foto do upload
require_once "salvar_foto.php";

$id = $_POST["id"];
$data = $_POST["data"];
$valor = $_POST["valor"];
$produto = $_POST["produto"];
$cliente = $_POST["cliente"];

//string com o comando slq para ser executado no db
$sql = "INSERT INTO `produto` (`nome`, `preco`, `descricao`, `foto`) 
VALUES (?, ?, ?, ?);"; 

//prepara o sql para ser executado  no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("sdssi", $data, $valor, $produto, $cliente, $id);

//executa o sql - comando no banco de dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");