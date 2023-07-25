<?php

include('conexao.php');
include('protecao.php');

if(!empty($_GET['id'])) {

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM agendamentos WHERE id_usuario=$id;";

    $result = $mysqli->query($sqlSelect);

    if($result->num_rows > 0){
        $sqlDelete = "DELETE FROM agendamentos WHERE id_agendamento=$id;";
        $resultDelete = $mysqli->query($sqlDelete);
    }
    
}    

?>