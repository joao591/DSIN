<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição</title>
</head>
<body>
    
</body>
<?php
include('conexao.php');
include('protecao.php');

if(!empty($_GET['id'])) {

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM agendamentos WHERE id_usuario=$id;";

    $result = $mysqli->query($sqlSelect);

    if($result->num_rows > 0){
        while($agend_data = mysqli_fetch_assoc($result)) {
            $servico = $agend_data['id_servico'];
            $sql2 = "SELECT descricao from servicos WHERE id=$servico;";
            $result2 = $mysqli->query($sql2);
            $agend_service = mysqli_fetch_assoc($result2);
            $nome_servico = $agend_service['descricao'];
            $data = $agend_data['desc_agendamento'];
        }
        //print_r($nome_servico);
    }
    else {
        header("Location: painel.php");
    } 
}

//echo $servico;

$user = $_SESSION['id_usuario'];

$sql = "SELECT id FROM `servicos` WHERE (`servicos`.`descricao` = '$servico');";

$result = $mysqli->query($sql);
//print_r($result);

$idagend = $result->fetch_assoc();
//$id = $idagend['id'];
//echo $id;
//print_r($result);

if($mysqli->query($sql2) === TRUE) {
    echo "Alteração efetuada com sucesso";
}

$mysqli->close();

?>

    <form action="saveEdit.php" method="POST">
    <fieldset>
    <legend>Realize a alteração:</legend>
    <div>
      <input type="radio" id="corte_cabelo" name="servico" value="Corte de Cabelo" <?php echo ($nome_servico == 'Corte de Cabelo') ? 'checked' : ''?> />
      <label for="corte_cabelo">Corte de Cabelo</label>

      <input type="radio" id="pintar_unhas" name="servico" value="Pintar Unhas" <?php echo ($nome_servico == 'Pintar Unhas') ? 'checked' : ''?>/>
      <label for="pintar_unhas">Pintar Unhas</label>

      <input type="radio" id="chapinha" name="servico" value="Chapinha" <?php echo ($nome_servico == 'Chapinha') ? 'checked' : ''?>/>
      <label for="chapinha">Chapinha</label>
    </div><br>
        <p>
            <label>Data:</label>
            <input type="datetime-local" id="dtagend" name="dtagend" value="<?php echo $data ?>" required>
        </p>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" name="update" id="update" value="Atualizar">
    </fieldset>
    </form>

    <p>
        <button><a href="./paineladm.php">Voltar</a></button>
    </p>
</html>