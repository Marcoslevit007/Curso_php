<?php

function myFunction() {
    echo "MINHA PRIMEIRA FUNÇÃO EM PHP";
}

myFunction();//COMO CHAMAR MINHA FUNÇÃO


//UMA FUNÇÃO PODE TER MAIS DE UM ARGUMENTO
echo "<hr>";
function myFunction2($A, $B) {
    echo "SEJA BEM VINDO $A $B";
}//Neste exemplo usamos dois argumentos
//Mais vale lembrar que uma função pode ter mais de um argumento
//Quantos você precisar

myFunction2("Marcos", "Levi");


//Definindo um valor padrão caso eu não receba nenhum parametro
echo "<hr>";
function minhaFuncao($minhaFuncao = 0) {
    echo "O valor armazenado é $minhaFuncao";
}

minhaFuncao(50);