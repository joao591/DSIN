<?php
    include("conexao.php");

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0){
        echo "Preencha o seu e-mail";
    }else if(strlen($_POST['senha']) == 0){
        echo "Preencha a senha";
    }else {

        $email =$mysqli->real_escape_string($_POST['email']);
        $senha =$mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM `usuarios` WHERE email = '$email' and senha = md5('$senha');";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código  SQL " .$mysqli->error);
    
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['permiss'] = $usuario['permiss'];

            if($_SESSION['permiss'] == 'ADM') {
                header("Location: paineladm.php");
            }else if($_SESSION['permiss'] == ''){
                header("Location: painel.php");
            }

        }else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Página de Login</h1>

    <form method="POST" action="">
        <p>    
            <label>E-mail:</label>
            <input type="email" name="email">
        </p>
        <p>
            <label>Senha:</label>
            <input type="password" name="senha">
        </p>
        <p><button type="submit">Enviar</button></p>
    </form><br>
    <p>Não possui cadastro? <a href="cadastro.php">Cadastre-se</a></p>

    
</body>
</html>