<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="cadastroclin.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Clínica | DocON</title>
</head>
<body>
<?php
        include('conexaoclin.php');
        $dadosclin = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        if(!empty($dadosclin['SendClinica'])){

            $query_clinica = "INSERT INTO clinica (nome, email, cnpj, senha, endereco) VALUES ('".$dadosclin['nome']."','".$dadosclin['email']."','".$dadosclin['cnpj']."', '".$dadosclin['senha']."', '".$dadosclin['endereco']."')";
            
            $mysqli->query($query_clinica);
        }
    ?>
    <div class="box">
        <form action="" method = "POST">
            <fieldset>
                <legend><b>Cadastro de Clínica</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id = "nome" class = "inputUser" placeholder = "Nome">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id = "email" class = "inputUser" placeholder = "Email">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cnpj" id = "cnpj" class = "inputUser" placeholder = "CNPJ">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id = "senha" class = "inputUser" placeholder = "Senha">
                </div>               
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id = "endereco" class = "inputUser" placeholder = "Endereço">
                </div>
                <br><br>
                
                <input type="submit" name="SendClinica" value="cadastrar" id = "submit"><br><br>
            </fieldset>
        </form>
        <a href="loginclin.php">Realizar login</a>
    </div>
    
</body>
</html>
