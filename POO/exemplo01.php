<?php 
//INICIANDO COM PROGRAMAÇÃO ORIENTADA A OBJETOS
//POR CONVENÇÃO TODA CLASSE E CRIADA COM LETRA MAIUSCULA
/* CLASSES E FUNÇÕES SÃO OS MEUS ATRIBUTOS E METODOS  */
class Pessoa {
    public $nome; //ISSO É UM ATRIBUTO
    public $idade;

    public function falar(){ // DESSA LINHA ATE A 11 E O MEU MÉTODO

        return "O MEU NOME É ".$this->nome;
    }

}

$marcos = new Pessoa();//Instanciando um objeto
$marcos->nome = "MARCOS LEVI";
echo $marcos->falar();
// O $THIS-> é a representação da minha classe já instanciada
//O que é encapsulamento
?>