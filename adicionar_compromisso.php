<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tccdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Insere o compromisso no banco de dados
$data = $_POST["data"];
$hora = $_POST["hora"];
$descricao = $_POST["descricao"];

$sql = "INSERT INTO compromissos (data, hora, descricao) VALUES ('$data', '$hora', '$descricao')";

if ($conn->query($sql) === TRUE) {
    echo "Compromisso adicionado com sucesso!";
} else {
    echo "Erro ao adicionar compromisso: " . $conn->error;
}

$conn->close();
?>