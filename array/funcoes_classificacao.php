<?php


$pessoa = [

    "NOME" => "MARCOS LEVI SANTOS TEIXEIRA",
    "IDADE" => 22,
    "NASCIMENTO" => "26/06/2002",
    "ESTADO" => "BAHIA",
    "CEP" => "43850-000",
    "CIDADE" => "SÃO SEBASTIÃO DO PASSE",
];

/*
$numeros = [ "MARCOS" =>1, 
             "ANTONIO" => 8, 
             "LEVI" => 5, 
             "DANIELE" => 2, 
             "FILIPE" => 3,
             "DAVID" => 6, 
             "ANA" => 7, 
             "MARIA" => 4];
*/

$numeros = [ "7" =>1, 
             "3" => 8, 
             "4" => 5, 
             "8" => 2, 
             "6" => 3,
             "2" => 6, 
             "1" => 7, 
             "5" => 4];
             

//USANDO FUNÇÕES PARA CLASSIFICAR UM ARRAY

//SORT() CLASSIFICANDO ARRAY EM ORDEM CRESCENTE do menor para o maior
//sort($numeros);

//RSORT() CLASSIFICANDO ARRAY EM ORDEM DECRESCENTE do maior para o menor
//rsort($numeros);

//ASORT() CLASSIFICANDO ARRAY ASSOCIATIVO EM ORDEM CRESCENTE, DE ACORDO COM O VALOR
//asort($numeros);
//KSORT() CLASSIFICANDO ARRAY ASSOCIATIVO EM ORDEM CRESCENTE, DE ACORDO COM A CHAVE
//ksort($numeros);

//ARSORT() CLASSIFICANDO ARRAY ASSOCIATIVO EM ORDEM DECRESCENTE, DE ACORDO COM A VALOR
//arsort($numeros);
//KRSORT() CLASSIFICANDO ARRAY ASSOCIATIVO EM ORDEM DECRESCENTE, DE ACORDO COM O CHAVE
//krsort($numeros);
//print_r($pessoa);       //var_dump($pessoa);

echo"<hr>";

print_r($numeros);