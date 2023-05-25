<?php

require_once "../conexao.php";

if(isset($_POST["nome"]) && isset($_POST["descricao"]) && isset($_POST["preco"]))
{

//inclui o arquivo para salvar a foto do upload
require_once "salvar_foto.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$foto = $nome_arquivo;

//string com o comando slq para ser executado no db
$sql = "UPDATE produto SET 
`nome`=?, `preco`=?, `descricao`=?, `foto`=? WHERE  `idproduto`=?"; 

//prepara o sql para ser executado  no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("sdssi", $nome, $preco, $descricao, $foto, $id);

//executa o sql - comando no banco de dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");