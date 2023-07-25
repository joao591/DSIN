<?php
session_start();
include('conexao.php');

$nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
$email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
$senha = mysqli_real_escape_string($mysqli, trim(($_POST['senha'])));

$sql = "SELECT COUNT(*) as total from usuarios where nome = '$usuario';";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header("Location: cadastro.php");
    exit;
}

$sql = "INSERT INTO usuarios (nome, email, senha, data_cadastro) VALUES ('$nome', '$email', md5('$senha'), NOW());";


if($mysqli->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$mysqli->close();

header("Location: cadastro.php");
exit;
?>