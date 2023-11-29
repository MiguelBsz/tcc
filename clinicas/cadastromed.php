<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="cadastroclin.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Médicos | DocON</title>
</head>
<body>
<?php
        include('conexaoclin.php');
        $dadosmed = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        if(!empty($dadosmed['SendMedico'])){

            $query_medico = "INSERT INTO medico (nome, especialidade, crm) VALUES ('".$dadosmed['nome']."','".$dadosmed['especialidade']."','".$dadosmed['crm']."')";
            
            $mysqli->query($query_medico);
        }
    ?>
    <div class="box">
        <form action="" method="POST">
            <fieldset>
                <legend><b>Cadastro de médicos</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" class = "inputUser" placeholder = "Nome">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="especialidade" class = "inputUser" placeholder = "Especialidade">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="crm" class = "inputUser" placeholder = "CRM">
                </div>               
                <br><br>
                
                <button type="submit" name="SendMedico" value="cadastrar" id="submit">Enviar</button><br><br>
            </fieldset>
        </form>
        <a href="paginasclinicas.php">retornar a página de clínicas</a>
    </div>
    
</body>
</html>