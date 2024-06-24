<?php

session_start();

if (!isset($_SESSION['id'])) {
    die("
    <div style=\"text-align: center; margin-top: 20%;\"><h1>Você não está logado!</h1><hr><p style=\"font-size: larger;\">para acessar essa página faça login a seguir: </p><a style=\"font-size: larger;\" href=\"../Registros-Logins/Login/login.php\">Entrar</a></p>
    ");
}
