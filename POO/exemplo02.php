<?php



class Carro { //ISSO É UMA CLASSE
    private $modelo; //ISSO É UM ATRIBUTO
    private $motor;
    private $ano;

    //Get modelo para pegar dados
    //Por convenção metodos começam com letras minusculas
    public function getModelo() {

        return $this->modelo;
    }


    public function setModelo($modelo) {

        $this->modelo = $modelo;
        //APARTIR DA LINHA ACIMA O MODELO E $MODELO SÃO A MESMA COISA
    }

    //PEGANDO DADOS DO MOTOR
    public function getMotor() {

        return $this->motor;

    }

    //Referenciando o meu objeto

    public function setMotor($motor) {

        $this->motor = $motor;

    }/*Para poder me comunicar com um colega em uma sala de aula
       primeiro eu tenho que chamar o professor que é a minha referencia
       para poder chamar o aluno */

    public function getAno():int {
        return $this->ano;
    }

    public function setAno($ano) { //ISSO É UM OBJETO

        $this->ano = $ano;

    }

    public function exibir() {//Esse metodo exibi todas as minhas informações em forma de array
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }

}
//Lembrando que o this é uma variavel interna que representa o nosso objeto

$gol = new Carro();
$gol-> setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2010");

var_dump($gol->exibir());














?>