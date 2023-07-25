<?php
include('conexao.php');
include('protecao.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Painel</title>
    <style>
        .table-bg{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
        }
    </style>
</head>
<body>
    <p>
        Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>!
    </p>
    <div align="right">
    <p aling="right">
        <button style="background-color: red;"><a style="color: white;" href="logout.php">Sair</a></button>
    </p>
    </div>
    <p>

        <?php
        $id = $_SESSION['id_usuario'];
        $sql = "SELECT * FROM `agendamentos` WHERE (`agendamentos`.`id_usuario` = $id);";

        $result = $mysqli->query($sql);
        //print_r($result);

        $user = $mysqli->query($sql);
        
        

        //print_r($result2);

        ?>
    </p>
    <div class="m-5">
        <h2 align="center">Meus agendamentos</h2>
        <table class="table table-bg">
            <thead>
                <tr>
                <th scope="col">Número</th>
                <th scope="col">Horário</th>
                <th scope="col">Descrição</th>
                <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($agend_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$agend_data['id_agendamento']."</td>";
                    echo "<td>".$agend_data['desc_agendamento']."</td>";
                    $user2 = $user->fetch_assoc();
                    $id_servico = $user2['id_servico'];
                    //echo $id_servico;
                    $sql2 = "SELECT valor,descricao FROM `servicos` WHERE (`servicos`.`id` = $id_servico);";
                    $result2 = $mysqli->query($sql2);
                    $service_data = mysqli_fetch_assoc($result2);
                    echo "<td>".$service_data['descricao']."</td>";
                    echo "<td>".$service_data['valor']."</td>";
                    echo "</tr>"; 
                }
            ?>
            </tbody>
        </table>
    </div>

    <button style="background-color: blue"><a style="color: white;" href="agendamento.php"><p>Criar novo Agendamento</p></a></button>
    
</body>
</html>