<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Página de Cadastro</h1>
    <?php
    if(isset($_SESSION['status_cadastro'])):
    ?>
        <p>Cadastro efetuado! </p>
        <p>Faça o login informando o e-mail e senha -><a href="index.php">Acessar</a></p>
    <?php
    endif;
    unset($_SESSION['status_cadastro']);
    ?>
    <?php
    if(isset($_SESSION['usuario_existe'])):
    ?>
    <p>O usuário informado já existe. Realize o login <a href="index.php">Login</a></p>
    <?php
    endif;
    unset($_SESSION['usuario_existe']);
    ?>
    <form method="POST" action="cadastrar.php">
        <p>
            <label>Nome:</label>
            <input type="text" name="nome">
        </p>
        <p>
            <label>Email:</label>
            <input type="email" name="email">
        </p>
        <p>
            <label>Senha:</label>
            <input type="password" name="senha">
        </p>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>