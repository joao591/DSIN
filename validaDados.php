<?php
include('conexao.php');
include('protecao.php');

$servico = mysqli_real_escape_string($mysqli, trim($_POST['servico']));
$data = mysqli_real_escape_string($mysqli, trim($_POST['dtagend']));

//echo $servico;

$user = $_SESSION['id_usuario'];

$sql = "SELECT id FROM `servicos` WHERE (`servicos`.`descricao` = '$servico');";

$result = $mysqli->query($sql);
//print_r($result);

$idagend = $result->fetch_assoc();
$id = $idagend['id'];
//echo $id;
//print_r($result);

$sql2 = "INSERT INTO agendamentos(desc_agendamento, id_usuario, id_servico) VALUES('$data', '$user', '$id');";

if($mysqli->query($sql2) === TRUE) {
    echo "Cadastro efetuado com sucesso";
}

$mysqli->close();

header("Location: painel.php");
exit;
?>