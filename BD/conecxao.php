<?php

$hostname = "localhost";
$bancodedados = "Projeto1";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados,);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_error;
}else{
    echo "Conectado com sucesso";
}

//CONECTANDO USANDO PDO
