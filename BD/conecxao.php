<?php
//Banco de dados PDO
//Tambem é orientado a objetos
$hostname = "localhost";
$bancodedados = "curso_php";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados,);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_error;
}else{
    echo "Conectado com sucesso";
}

//CONECTANDO USANDO PDO
