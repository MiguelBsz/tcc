<?php

$usuario = 'root';
$senha = '';
$database = 'tccdb';
$host = 'localhost';

try{
    $conn = new PDO("mysql:host = $host; database=" . $database, $usuario, $senha);
} catch(PDOException $err){
    echo "erro";
    $err = getMessage();
}

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

$mysqli1 = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

$conex = new mysqli($host, $usuario, $senha, $database);
