<?php
$aluno1 = array(
    "nome" => "poliana silveira",
    "nota1" => 7,
    "nota2" => 9
);

$aluno2 = array(
    "nome" => "murilo alexandre",
    "nota1" => 8,
    "nota2" => 5
);

$aluno3 = array(
    "nome" => "andre felipe",
    "nota1" => 6,
    "nota2" => 7
);

$aluno4 = array(
    "nome" => "lavinia sandy",
    "nota1" => 6,
    "nota2" => 7
);

$dados = [$aluno1, $aluno2, $aluno3, $aluno4];

//print_r($dados);
echo json_encode($dados);