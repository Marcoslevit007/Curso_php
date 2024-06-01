<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--CRIANDO UM GERADOR DE TABUADA-->

<form action="" method="get">
    <label for="">INFORME UM NUMERO</label>
    <br>
    <input type="text" value="" name="numero">
    <input type="submit" value="INICIAR">
</form>

<?php

$numero = $_GET['numero'];

    for ($i = 1; $i < 11; $i++) {  
        echo "$numero x $i = ".$numero*$i. "<br>";
    }



?>

</body>
</html>

