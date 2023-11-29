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

// Seleciona os compromissos do banco de dados
$sql = "SELECT * FROM compromissos ORDER BY data, hora";
$result = $conn->query($sql);

// Imprime a lista de compromissos
if ($result->num_rows > 0) {
    echo "<h1>Lista de Compromissos</h1>";
    while($row = $result->fetch_assoc()) {
        echo "<p><strong>Data:</strong> " . $row["data"] . "<br>";
        echo "<strong>Hora:</strong> " . $row["hora"] . "<br>";
        echo "<strong>Descrição:</strong> " . $row["descricao"] . "</p>";
    }
} else {
    echo "Nenhum compromisso encontrado.";
}

$conn->close();
?>