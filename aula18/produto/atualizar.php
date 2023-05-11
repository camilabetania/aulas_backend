<?php

require_once "../conexao.php";

if(isset($_POST["nome"]) && isset($_POST["descricao"]) && isset($_POST["preco"]))
{
$id = $_POST["id"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$foto = "semfoto.png";

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
header("Location: form.php");