<?php
    session_start();

    ob_start();

//    include_once'conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar</h1>

    <?php
        include('conexao.php');
        $dadosmed = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        if(!empty($dadosmed['SendMedico'])){
            var_dump($dadosmed);

            $query_medico = "INSERT INTO medico (nome, especialidade, crm) VALUES ('".$dadosmed['nome']."','".$dadosmed['especialidade']."','".$dadosmed['crm']."')";
            
            $mysqli->query($query_medico);
        }
    ?>
    <form action="" method="POST">
        <label>Nome</label>
        <input type="text" name="nome" placeholder="nome"><br><br>
        <label>Especialidade</label>
        <input type="text" name="especialidade" placeholder="especialidade"><br><br>
        <label>CRM</label>
        <input type="text" name="crm" placeholder="CRM"><br><br>

        <input type="submit" name="SendMedico" value="cadastrar"><br><br>
        
    </form>
</body>
</html>