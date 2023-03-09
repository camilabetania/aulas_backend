<h2>Vetor com Índice textual</h2>
<pre>
          +--------+
    nome  |notebook|
          +--------+
    marca |dell    |
          +--------+
    preco |5.400   |
          +--------+
</pre>

<?php
    $produto = [
        "nome" => "notebook",
        "marca" => "dell",
        "preco" => 5499.99
    ];
    var_dump($produto);

    echo "<br>";
    echo $produto["nome"] . "<br>";
    echo $produto["marca"] . "<br>";
    echo $produto["preco"] . "<br>";

    //estrutura de repetição especifica
    //para percorrer vetores
    foreach($produto as $key => $value){
        echo $value . "<br>";
        

    }
?>