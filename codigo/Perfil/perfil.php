<?php

include ('conexao.php');

include ('protect.php');

$idUsuario = $_SESSION['id'];
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];

//Quantidade de posts
$sql_code = "SELECT * FROM ender WHERE userID = $idUsuario";
$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

$enderecos = $sql_query->fetch_assoc();

$rua = $enderecos['rua'];
$bairro = $enderecos['bairro'];
$cidade = $enderecos['cidade'];
$estado = $enderecos['estado'];
$numCasa = $enderecos['numCasa'];
$CEP = $enderecos['CEP'];

$enderUser =
    "
    <div class=\"col-sm-6 mb-3 mb-sm-0\" id=\"cardEnder\">
        <div class=\"card\" >
            <div class=\"card-body\">
                <h5 class=\"card-title\">Endereço salvo</h5>
                <hr>
                <ul id=\"itensEnder\">
                    <li>Rua: $rua</li>
                    <li>Bairro: $bairro</li>
                    <li>Número casa: $numCasa</li>
                    <li>Cidade: $cidade</li>
                    <li>Estado: $estado</li>
                    <li>CEP: $CEP</li>
                </ul>
                <button id=\"myBtn\">Editar</button>
            </div>
        </div>
    </div>
    ";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql_code = "DELETE FROM ender WHERE userID = $idUsuario";
    $sql_query = $mysqli->query($sql_code) or die($aviso = "Falha na execução do código SQL" . $mysqli->error);

    $ruaInp = $_POST['rua'];
    $bairroInp = $_POST['bairro'];
    $cidadeInp = $_POST['cidade'];
    $estadoInp = $_POST['estado'];
    $numCasaInp = $_POST['numCasa'];
    $CEPInp = $_POST['CEP'];

    $sql_code = "INSERT INTO ender (rua, bairro, cidade, estado, numCasa, CEP, userID) VALUES ('$ruaInp', '$bairroInp', '$cidadeInp', '$estadoInp', '$numCasaInp', '$CEPInp', '$idUsuario')";
    $sql_query = $mysqli->query($sql_code) or die($aviso = "Falha na execução do código SQL" . $mysqli->error);
    
    header("Location: ../Perfil/perfil.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Italianno' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Indie Flower' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="perfil.css">
    <title>Perfil - Kelly Fonseca</title>
</head>

<body id="jquery">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

<body>
    <div class="header">
        <img src="" alt="" width="5%" style="margin-left: 5%;" id="logo" onclick="clicado()">
        <ul class="navbar">
            <li id="navLi" class="navItem"><a href="../Menus/Menu-base/index.html">Menu</a></li>
            <li id="navLi" class="navItem"><a href="../Blog/blog.php">Blog</a></li>
            <li id="navLi" class="navItem"><a href="../Lojas/lojas.html">Loja</a></li>
            <li id="navLi" class="navItem"><a href="../Sobres/sobres.html">Sobre</a></li>
            <li id="liLogo"><img src="img/profileIcon.png" alt="" width="10%" id="logoProfile" onclick="profile()"></li>
        </ul>
    </div>
    <main>
        <div id="userInfo">
            <img src="img/iconPerfil.png" alt="" width="20%">
            <div>
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Nome</div>
                            <?php echo $nome ?>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Email</div>
                            <?php echo $email ?>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold"><a href="logout.php" id="btnSair">Logout</a></div>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
        <div id="userEnder">
            <h3>Dados de compra</h3>
            <p>Para realizar uma compra será necessário algumas informações,<br> deixamos aqui seus dados a fim de poder
                alterá-los quando quiser!</p>
            <div class="row">
                <?php echo $enderUser ?>
            </div>
        </div>
    </main>

    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Atualizar endereço</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <form action="perfil.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Rua</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="rua">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Bairro</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="bairro">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Num. Casa</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="numCasa">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="cidade">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Estado</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="estado">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">CEP</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="CEP">
                    </div>
                    <div class="modal-footer">
                        <button type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    window.onload = function () {
        const tipo = sessionStorage.getItem("Tipo");

        if (tipo == "true") {
            $('#logo').prop("src", "img/logoAroma-trans.png");
            $('#logo').css("width", "5%");
            $('#logo').css("margin-left", "5%");
        }
        else {
            $('#logo').prop("src", "img/kellyLogo.png");
            $('#logo').css("width", "20%");
        }
    } 

    function clicado(){
        window.location.href = "../Menus/Menu-base/index.html"
    }
</script>