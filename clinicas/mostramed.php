<?php
    include('conexao.php');
    $sql = "SELECT * FROM medico ORDER BY id DESC";

    $result = $conex->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .table-bg{
            background-color: #5F9EA0;
            border-radius: 15px 15px 15px 15px;
        }
    </style>
</head>
<body style="background: #00CED1 no-repeat; background-size: 500% 500%;">
    <div class="m-5">
            <table style="text-align: center" class="table text-white table-bg">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Especialidade</th>
                <th scope="col">CRM</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    while($clin_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$clin_data['Id']."</td>";
                        echo "<td>".$clin_data['nome']."</td>";
                        echo "<td>".$clin_data['especialidade']."</td>";
                        echo "<td>".$clin_data['crm']."</td>";
                    }
                ?>
        </tbody>
        </table>
    </div>
</body>
</html>