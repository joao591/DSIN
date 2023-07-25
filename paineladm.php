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
    <title>Administração</title>
    <style>
        .table-bg{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
        }
    </style>
</head>
<body>
    <h1>Página de Administração</h1>

    Bem vindo ao gerenciamento da página <?php echo $_SESSION['nome']; ?>!

    <?php

    $sql = "SELECT * FROM agendamentos ORDER BY desc_agendamento;";

    $result = $mysqli->query($sql);

    //print_r($result);

    $user = $mysqli->query($sql);

    $usuario = $mysqli->query($sql);

    ?>

<div class="m-5">
    <h2 align="center">Agendamentos</h2>
        <table class="table table-bg">
            <thead>
                <tr>
                <th scope="col">Número</th>
                <th scope="col">Nome</th>
                <th scope="col">Horário</th>
                <th scope="col">Descrição</th>
                <th scope="col">Valor</th>
                <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($agend_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    $usuario2 = $usuario->fetch_assoc();
                    $id_usuario = $usuario2['id_usuario'];
                    $sql3 = "SELECT nome FROM `usuarios` WHERE (`usuarios`.`id_usuario` = $id_usuario);";
                    $result3 = $mysqli->query($sql3);
                    $user_data = mysqli_fetch_assoc($result3);
                    echo "<td>".$agend_data['id_agendamento']."</td>"; 
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$agend_data['desc_agendamento']."</td>";
                    $user2 = $user->fetch_assoc();
                    $id_servico = $user2['id_servico'];
                    //echo $id_servico;
                    $sql2 = "SELECT valor,descricao FROM `servicos` WHERE (`servicos`.`id` = $id_servico);";
                    $result2 = $mysqli->query($sql2);
                    $service_data = mysqli_fetch_assoc($result2);
                    echo "<td>".$service_data['descricao']."</td>";
                    echo "<td>".$service_data['valor']."</td>";
                    echo "<td>
                        <a class'btn btn-primary' href='edit.php?id=$agend_data[id_agendamento]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                        </a>
                        <a class'btn btn-danger' href='delete.php?id=$agend_data[id_agendamento]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                            <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                        </svg>
                        </a>
                    </td>";
                    echo "</tr>"; 
                }
            ?>
            </tbody>
        </table>
    </div>

    <p>
        <a href="logout.php">Sair</a>
    </p>
    
</body>
</html>