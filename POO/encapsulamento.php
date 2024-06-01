<?php


class Pessoa{

    public $nome = "Marcos Levi Santos Teixeira";
    protected $idade = 22;
    private $estado = "BA";
    //USANDO OS TRES TIPOS DE VISUALIZAÇÕES 
    // QUANDO O ATRIBUTO E PUBLICO TODOS PODEM VER 
    //PROTECTD SO PODE SER VISTO NA MESMA CLASSE E NA CLASSE EXTENDIDA 
    //Private so a mesma classe pode ver
    public function verDados(){

        echo $this->nome."<br>";
        echo $this->idade."<br>";
        echo $this->estado."<br>";
    }// CONSIGO VER DADOS PROTEGIDOS E PROVADOS PQ MINHA FUNÇÃO ESTA NA MESMA CLASSE

};

//A classe programador extendi tudo o que tem dentro da pessoa
//Menos atributos privados  
class Programador extends Pessoa {//EXTENÇÃO DE UMA CLASSE
    
    
    public function verDados(){

        echo get_class($this)."<br>";//RETORNA DE QUAL CLASSE A FUNÇÃO VER DADOS ESTA SENDO PUCHADA

        echo $this->nome."<br>";// Todos podem ver
        echo $this->idade."<br>";//A classe pai e a classe extendida pode ver
        echo $this->estado."<br>";//So a classe pai ´pode ver
    }


}







$objeto = new Programador();

//echo $objeto->nome."<br>";
//ESSAS SÃO AS TRÊS FORMAS QUE EU POSSO ACESSAR ATRIBUTOS E METODOS
//MESMA CLASSE
//CLASSE EXTENDIDA
//OBJETO

$objeto ->verDados();

