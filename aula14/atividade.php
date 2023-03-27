<?php
    if(isset ($_POST['cor'])){
        $cor = $_POST['cor'];
    }else{
        $cor = 'white';
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
    <form method="post" aaction="atividade.php">
        <label for="cor">selecione uma cor</label><br>
        <input type="color" name="cor" id="cor"><br>
        <button type="submit">enviar</button><br>
       </form>
       <style>
        body{
            background-color: <?php echo $cor ?>;
        }
        </style>
</body>
</html>