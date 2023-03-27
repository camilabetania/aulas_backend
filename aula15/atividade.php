<?php
    $cor[]= "yellow";
    $cor[] = "green";
    $cor[] = "blue";
    $cor[]= "pink";
    $cor[] = "red";
    $cor[] = "purple";
    $cor[] = "orange";
    $cor[] = "grey";
    $cor[] = "white";
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
    
    <?php
        foreach($cor as $key => $cor){
            echo "<a href='atividade.php?cor=$cor'>Mudar para $cor</a>" . "<br>";

        }
    ?>

</body>
</html>