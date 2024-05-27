<?php

include ('conexao.php');

$aviso = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == null || $senha == null) {

        if (strlen($email) == 0) {
            $aviso = "Preencha seu email";
        } else if (strlen($senha) == 0) {
            $aviso = "Preencha sua senha";
        }
    } else {

        $sql_code = "SELECT * FROM user WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            session_start();

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];

            header("Location: /projetoEuler/codigo/Menus/MenuArtes/MenuArtes.html");
        } else {
            $aviso = "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginArtes.css">
    <link href='https://fonts.googleapis.com/css?family=Italianno' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Indie Flower' rel='stylesheet'>
    <title>Login Arte</title>
</head>
<body>
    <img class="img-logo" src="img/bf1abe_59bee449564d487187175909f042c960~mv2.webp">   
    <div class="page">
        <div class="card">
            <form action="post">
                <h1>Entrar</h1>
                <input class="box" type="email" placeholder="Email" name="email">
                <input class="box" type="password" placeholder="Senha" name="senha">
                <a href="#">Esqueceu a senha?</a>
                <button type="submit" class="btn">Enviar</button>
                <p>Novo neste site? <a href="#">Registre-se</a></p>
            </form>
        </div>
    </div>

</body>
</html>