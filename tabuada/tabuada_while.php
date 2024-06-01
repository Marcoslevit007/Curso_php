<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<form action="" method="get">
    <label for="">INSIRA UM NUMERO</label>
    <input type="text" name="nome" id="nome">
    <button type="submit">enviar</button>
</form>

<?php
$numero = $_GET['nome'];
settype($numero, "integer");
$i = 0;
while ($i < 10) {
    $i++;
    echo $numero . " X " . $i . " = " . $numero * $i . "<br>";
    
}   

?>

</body>
</html>