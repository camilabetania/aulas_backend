<?php

for ($contador = 0; $contador <= 10; $contador++){
    $resultado = $_GET['numero1'] * $contador;
    echo $_GET['numero1']. "x $contador =   $resultado <br>";
}

?>