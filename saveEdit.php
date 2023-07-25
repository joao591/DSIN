<?php

include('conexao.php');
include('protecao.php');

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $nome_servico = $_POST['servico'];
        $data = $_POST['dtagend'];

        $sql2 = "SELECT id FROM servicos WHERE descricao = '$nome_servico';";

        $result2 = $mysqli->query($sql2);

        $id_servico = mysqli_fetch_assoc($result2);

        //print_r($result2);
       

        $sqlUpdate = "UPDATE `agendamentos` SET `desc_agendamento` = '$data', `id_servico` = '$id_servico[id] WHERE `agendamentos`.`id_agendamento` = $id';";

        $result = $mysqli->query($sqlUpdate);
    }
    header("Location: paineladm.php");

?>