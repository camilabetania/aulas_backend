<?php

require_once "../conexao.php";

//verifica se foi enviado o param id pela URL
if(isset($_GET['id']))
{

//pega o valor do id que foi enviado pela URL
$id = $_GET['id'];

//string com o comando slq para ser executado no db
$sql = "DELETE FROM `produto` WHERE  `idproduto`= ? ;"; 

//prepara o sql para ser executado  no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("i", $id);

//executa o sql - comando no banco de dados
$comando->execute();
}
//abre o arquivo form.php
header("Location: form.php");