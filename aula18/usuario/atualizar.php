<?php

require_once "../conexao.php";

if(isset($_POST["nome"]) && isset($_POST["login"]) && isset($_POST["senha"]))
{

//inclui o arquivo para salvar a foto do upload
require_once "salvar_foto.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
$foto = $nome_arquivo;

//string com o comando slq para ser executado no db
$sql = "UPDATE usuario SET 
`nome`=?, `senha`=?, `login`=?, `foto`=? WHERE  `idusuario`=?"; 

//prepara o sql para ser executado  no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssssi", $nome, $senha, $login, $foto, $id);

//executa o sql - comando no banco de dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: usuarios.php");