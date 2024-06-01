<?php


//VAMOS ABORDAR OS OPERADORES DE COMPARAÇÃO NESTE CAPITULO
echo "INICIANDO COM O OPERADOR DE IGUALDADE <br><br>";
//IGUAL
//==
$a = 8;
$b = "8";
$c = 12;
$d = "1";
    if ($a == $b) {
        echo $a . " E " . $b . " SÃO NUMEROS IDENTICOS <br>";
    }

if ($a == $c) {

    echo "SÃO IDENTICOS <br>";
}else {
    echo $a . " E " . $c .  " NÃO SÃO IDENTICOS <br>";
} //NESTE EXEMPLO VERIFICAMOS APENAS SE UM VALOR É IGUAL AO OUTRO

echo "<hr>";
echo "INICIANDO COM O OPERADOR DE IDENTIDADE <br><br>";
//IDENTIDADE
//=== 
// USADO PARA SABER SI UM VARIAVEL ATENDE TANTO NO TIPO DE DADO TANTO NO VALOR ARMAZENADO

if ($a === $b) {
    echo $a . " E IDENTICO A " . $b . "<br>";
} // primeiro exemplo


if ($a === $d) {
    echo $a . " E IDENTICO A " . $d . "<br>";
}else {
    echo $a . " NÃO É IDENTICO A " . $d . "<br>";
}//SEGUNDO EXEMPLO 





// DIFERENÇA
// NESTE OPERADOR VERIFICAMOS SE UM VALOR É DIFERENTE DO OUTRO
//!=

if ($a != $b) {
    echo $a . " é diferente de " . $b;
}else {
    echo $a . " é identico a " . $b;
} /* A PRIMEIRA CONDIÇÃO SO E INICIADA SE A VARIAVEL A FOSSE DIFERENTE DE B*/




echo "<br>";

// NÃO IDENTICO
//!==
// verifica si um numero e diferente do outro, e se o tipo de dado tambem e diferente
if ($a !== $b) {
    echo "ENTROU NO IF";
}else {
    echo "ERRO INESPERADO !";
}


echo "<hr>";
echo "<br>";
//MAIOR E MAIOR OU IGUAL
//>=
if ($a > $b) {
    echo $a." e maior que ".$b;
}else {
    echo $a . " não e maior que " . $b;
}
echo "<br>";
if ($a >= $b){
    echo $a . " e maior ou igual a " . $b;
}

echo "<hr>";

//MENOR E MENOR OU IGUAL
//<=
if ($a < $b) {
    echo $a." e menor que ".$b;
}else {
    echo $a . " não e menor que " . $b;
}
echo "<br>";
if ($a <= $b){
    echo $a . " e menor ou igual a " . $b;
}