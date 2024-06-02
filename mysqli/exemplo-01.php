<?php
// O banco de dados mysqli e orientado a objetos
// Neste primeiro exercicio simularemos uma conexão com o banco

$conn = new mysqli("localhost", "root", "", "curso_php");

//Comando para checar conexão
if($conn-> connect_error){

    echo "Erro" . $conn->connect_error;

}else{
    echo "Conectado com sucesso";
}



$result = $conn-> query("SELECT * FROM tb_usuarios ORDER BY DESLOGIN");


while ($row = $result->fetch_array(MYSQLI_ASSOC)){

    var_dump($row);

}







//Usando o comando prepare
//Usado para preparar um comando para o banco de dados

/*$stmt = $conn->prepare("INSERT INTO tb_usuarios(DESLOGIN, DESSENHA) VALUES(?, ?)"); //Dentro dos parenteses você vai escrever um conmando sql normalmente



$stmt-> bind_param("ss",$login, $pass);// O PRIMEIRO PARAMETRO É O TIPO DE DADO A SER PASSADO

$login = "usuario";
$pass = "12345";

$stmt->execute();// Agora sim iremos executar meus comandos no banco de dados

$login = "Levi";
$pass = "@x./z";

$stmt->execute();*/