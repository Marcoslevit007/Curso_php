<?php
//ARRAY INDEXADO
$a = [1, 2, 3];
print_r($a);// UM ARRAY E IMPRESSO USNADO ESSA FUNÇÃO
echo "<br>";
//echo $a[0]; // POSSO IMPRIMIR PARTES DE UM ARRAY CHAMANDO 
            // NUMEROS ESPECIFICOS DELES

          
            //NESTE CAPITULO TEMOS UM VETOR QUE NADA MAIS E QUE UM ARRAY DE UMA DIMENÇÃO


            //REMOVENDO VALORES DE UM ARRAY INDEXADO
            array_splice($a, 0, 1);

//var_dump($a);
print_r($a);

//O VALOR NÃO ESTAVA ALTERANDO PELO SIMPLES FATO QUE EU NÃO EXECUTEI UMA SEGUNDA CHAMADA DO MEU ARRAY
//A PRIMEIRA CHAMADA EXECUTA ELE ANTES DE SOFRER ALTERAÇÕES 
//NA SEGUNDA CHAMADA ELE EXECUTA JA COM AS ALTERAÇÕES FEITAS
// LEMBRE-SE QUE O CODIGO E EXECUTADO DE CIMA PARA BAIXO