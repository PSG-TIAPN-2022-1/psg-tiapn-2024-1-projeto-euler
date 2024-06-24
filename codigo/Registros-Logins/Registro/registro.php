<?php
include ('conexao.php');

$aviso = "";

//validar os campos: tamaho da senha e nome

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql_code = "SELECT * FROM user WHERE email = '$email'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 0) {

        $sql_code = "INSERT INTO user (nome, email, senha) VALUES ('$nome','$email','$senha')";
        $sql_query = $mysqli->query($sql_code) or die($aviso = "Falha na execução do código SQL" . $mysqli->error);

        header("Location: ../Menus/Menu-base/index.html");
    } else {
        $aviso = "Falha ao registrar! E-mail já está sendo utilizado";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <link href='https://fonts.googleapis.com/css?family=Italianno' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Indie Flower' rel='stylesheet'>
    <title>Cadastro</title>
</head>

<body id="jquery">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

<body>
    <img class="img-logo" src="" onclick="clicado()">
    <div class="page">
        <div class="card">
            <form action="registro.php" method="post">
                <h1>Criar conta</h1>
                <input class="box" type="text" placeholder="Nome" name="nome" required>
                <input class="box" type="email" placeholder="Email" name="email" required>
                <div id="inpSen">
                    <input class="box" id="sen" type="password" placeholder="Senha" name="senha" required>
                    <input type="checkbox" onclick="view()">
                </div>
                <!-- <input class="box" type="password" placeholder="Confirmar senha"> -->
                <div id="emailHelp" class="form-text">Não compartilharemos seu email com ninguém!</div>
                <button class="btn" type="submit">Enviar</button>
            </form>
            <p id="aviso"><?php echo $aviso ?></p>
        </div>
    </div>
</body>
<img src="">

</html>

<script>
    function view() {
        if ($('#sen').prop('type') == 'password')
            $('#sen').prop('type', 'text');
        else
            $('#sen').prop('type', 'password');
    };

    window.onload = function () {
        const tipo = sessionStorage.getItem("Tipo");

        if (tipo == "true") {
            $('.img-logo').prop("src", "img/logoAroma.jpg");
        }
        else
            $('.img-logo').prop("src", "img/kellyLogo-vertical.png");
    } 

    function clicado(){
        window.location.href = "../../Menus/Menu-base/index.html"
    }
</script>

<style>
    #inpSen {
        display: flex;
    }

    #sen {
        width: 80%;
    }

    .form-text {
        text-align: center;
    }

    #aviso {
        text-align: center;
        color: red;
        background-color: antiquewhite;
    }

    body {
        margin: 0;
        padding: 0;
        background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(155, 184, 205, 1) 35%, rgba(95, 93, 156, 1) 100%);
    }
</style>