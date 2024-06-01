<?php

interface Veiculo{
    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);

}


interface Seguranca{

    public function Travas($trava);
    public function Sinto($cinto_seguranca);
}

abstract class Automovel implements Veiculo{

    //Posso ter mais de uma interface baste por virgula o nome dela e implementar or outros metodos
    public function acelerar($velocidade){

      
      echo "O veiculo acelerou ate ".$velocidade."KM/H  <br>";

    }//A medida em que você vai criando os atributos a contagem muda

    public function frear($velocidade){
        
        echo "O veiculo freiou a ".$velocidade."KM/H <br>";

    }


    public function trocarMarcha($marcha){

        echo "O veiculo engatou a marcha ".$marcha."<br>";

    }

    //Implementando a segunda interface

    public function Travas($trava){


        echo "O veiculo está ".$trava."<br>";

    }

    public function Sinto($cinto_seguranca){


        echo "O veiculo possui ".$cinto_seguranca." cintos de segurança";

    }

}


class Delrey extends Automovel {

    public function Empurrar(){
        
    }

}



$carro = new Delrey();

$carro->acelerar(200);




