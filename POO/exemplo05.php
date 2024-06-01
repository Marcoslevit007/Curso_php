<?php


//Usando o metodo construtor
//Usando o metodo destruidor

class Endereco {
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){//Metodo construct
         $this->logradouro = $a;   
         $this->numero = $b;
         $this->cidade = $c;

    }
    //Metodo destruct
}

$meuEndereco = new Endereco("Ladeira da embasa", "59", "São Sebastião Do Passe");
var_dump($meuEndereco);