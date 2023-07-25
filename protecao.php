<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id_usuario'])) {
    die("Realize o login para acessar a página.<p><a href=\"index.php\">Entrar</a></p>");
}
?>