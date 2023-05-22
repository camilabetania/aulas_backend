<?php 

include "dados.php";

if(isset($_GET['id'])){
    //apaga um elemento do vetor que possui o indice
    //igual ao valor da variavel id
    $id = $_GET['id'];
    unset($alunos[$id]);
}


//adiciona um novo elemento no vetor, com os dados que vieram no formulario
if(isset($_POST['nome'])){
$alunos[] = [
"ra" => $_POST['ra'],
"nome" => $_POST['nome'],
"turma" => $_POST['turma']
];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border="1" width="100%">
    <tr>
        <td>ra</td>
        <td>nome</td>
        <td>turma</td>
        <td>açoes</td>
    </tr>

    <?php foreach($alunos as $key => $aluno){?>
    

    <tr>
        <td><?php echo $aluno["ra"]?></td>
        <td><?php echo $aluno["nome"]?></td>
        <td><?php echo $aluno["turma"]?></td>
        <td>
            <a href="tabela.php?id=<?php echo $key;?>">Excluir</a>
        </td>
    </tr>

    <?php } ?>

</table>

</body>
</html>