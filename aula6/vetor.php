<h2>Vetores (array)</h2>
<p>
    São estruturras de armazenamento compostas heterogênas, 
    que podem ser indexadas númericamente ou textualmente.
</p>

<?php
    //exemplo variável simples
    $nota = 6;
    $nota = 3;
    echo $nota. "<br>";

    //exemplo vetor indexado númericamente
    $notas = []; 
    $notas[] = 6;
    $notas[] = 3;
    //var_dump ($notas);
    //imprimir só a primeira nota
    echo ($notas[0] + $notas[1]) / 2 ;

    //vetores com indice textual
    $notas = []; //cria um vetor vazio
    $notas["debora"] = 7;
    $notas["murilo"] = 7.8;
    $notas["poliana"] = 9;
    echo "<p></p>";
    echo "a poliana tirou nota " . $notas["poliana"];

    //imprimindo o conteúdo de um vetor númerico.
    $valores = [2,4,8,10,12,14,16];

    echo "<br>";
    for($i = 0; $i <= 6; $i++){
        echo $valores[$i] . "<br>";
    }

    //somar os valores de um vetor
    $acumulador = 0;
    for($i=0; $i<=6; $i++){
        $acumulador = $acumulador + $valores[$i];
    }
    echo "<br> A soma dos valores é $acumulador";
?>