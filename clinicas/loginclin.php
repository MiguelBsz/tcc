<?php
include('conexaoclin.php');

if(isset($_POST['cnpj']) || isset($_POST['senha'])) {

    if(strlen($_POST['cnpj']) == 0) {
        echo "Preencha o CNPJ de sua empresa";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha a senha";
    } else {

        $cnpj = $mysqli1->real_escape_string($_POST['cnpj']);
        $senha = $mysqli1->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM clinica WHERE cnpj = '$cnpj' AND senha = '$senha'";
        $sql_query = $mysqli1->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli1->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $clinica = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $clinica['id'];
            $_SESSION['nome'] = $clinica['nome'];

            header("Location: paginasclinicas.php");

        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="cadastroclin.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Clínica | DocON</title>
</head>
<body>
    <div class="box">
        <form action="" method="POST">
            <fieldset>
                <legend><b>Login de Clínica</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="cnpj" class = "inputUser" placeholder = "CNPJ">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" class = "inputUser" placeholder = "Senha">
                </div>               
                <br><br>
                
                <button type="submit" id = "submit">Entrar</button><br><br>
            </fieldset>
        </form>
        <a href="cadastroclin.php">Cadastrar</a>
    </div>
    
</body>
</html>