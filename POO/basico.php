<?php


class Carro{

    public $marca;
    public $modelo;
    public $ano;
    public $motor;

}


$uno = new Carro();
$uno->marca = "Uno";
print_r($uno);