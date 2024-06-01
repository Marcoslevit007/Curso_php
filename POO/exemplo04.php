<?php

class Caneta{//classe
    private $modelo;//atributos
    private $cor;
    private $ponta;
    private $carga;
    private $tampada;

    //Instanciando meus atributos    
    public function setModelo($modelo){// instanciando um atributo
        $this->modelo = $modelo;
    }//O metodo set adiciona valores ao meu objeto

    public function getModelo(){// instanciando um atributo
        return $this->modelo; 
    }//o metodo get pusha valores do meu objeto
    
    public function setCor(){// instanciando um atributo
        return $this->cor;
    }
    public function getCor($cor){// instanciando um atributo
        $this->cor = $cor;
 
    }

    public function setPonta(){
        return $this->ponta;
    }
    public function getPonta($ponta){
        $this->ponta = $ponta;
    }


    public function setCarga(){
        return $this->carga;
    }
    public function getCarga($carga){
        $this->carga = $carga;
    }


    public function setTampada(){
        return $this->tampada;
    }
    public function getTampada($tampada){
        $this->tampada = $tampada;
    }




    
    //Metodos da minha classe
     function rabiscar(){
        if($this->tampada == True){
            echo "Erro, não é possivel rabiscar com a caneta tampada";
        }else{
            echo "Rabiscando";
        }
    }

    function tampar(){
        $this->tampada = True;
    }

     function destampada(){
        $this->tampada = False;
    }



}

$bic = new Caneta();
$bic->setModelo("BIC");
$bic->setCor("PRETA");
$bic->setPonta("07");
$bic->setCarga("CHEIA");
$bic->setTampada("Tampada");
rabiscar();
var_dump($bic);























?>