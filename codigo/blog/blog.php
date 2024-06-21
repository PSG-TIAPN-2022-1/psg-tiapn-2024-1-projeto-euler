<?php

include ('conexao.php');

//Quantidade de posts
$sql_code = "SELECT * FROM post";
$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

$quantidade = $sql_query->num_rows;

$posts = "";
$postsDest = "";

for ($i = 0; $i < $quantidade; $i++) {
    //Quantidade de comentários
    $sql_code = "SELECT * FROM coment WHERE postID = '$i' + 1";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

    $quantidadeComent = $sql_query->num_rows;

    //Recupera info Post
    $sql_code = "SELECT * FROM post WHERE postID = '$i' + 1";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

    $postagem = $sql_query->fetch_assoc();

    $title = $postagem['postTitle'];
    $data = $postagem['postData'];
    $url = $postagem['imgUrl'];
    $desc = $postagem['postDesc'];



    //Recupera info Comentário
    $coments = "";

    if ($quantidadeComent == 0) {
        $coments = "<div class=\"comment\">
                    <p>-sem comentários-</p>
                    <br>
                </div>";
    } else {
        $sql_code = "SELECT * FROM coment WHERE postID = '$i'+ 1";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);
        $qnt = 0;

        while ($comentario = $sql_query->fetch_assoc()) {
            if ($qnt > 2) {
                $coments .=
                    "<button id=\"btnComment\"><h5>Mostrar mais</h5></button>
                    <br>";
                break;
            } else {
                $textComent = $comentario['comentText'];
                $dataComent = $comentario['comentData'];

                $coments .=
                    "<div class=\"comment\">
                    <h3>$textComent</h3>
                    <p>$dataComent</p>
                    <br>
                </div>";

            }
            $qnt++;
        }
    }

    //Exibe posts
    $posts .=
        "<div class=\"post\">
            <h2>$title</h2>
            <span class=\"data-post\">$data</span>
            <img src=\"$url\"
                width=\"620px\">
            <p>$desc</p>
            <div class=\"comment-section\">
                <h3>Comentários</h3>
                $coments
                <br>
                <form action=\"blog.php\" method=\"post\">
                    <textarea id=\"commentInput\" placeholder=\"Escreva um comentário...\" name=\"comentInput\"></textarea>
                    <button type=\"submit\">Enviar</button>
                </form>
            </div>
        </div>";
}


//Exibe posts destaque
for ($i = 0; $i < $quantidade; $i++) {
    $sql_code = "SELECT * FROM post WHERE postID = '$i' + 1";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

    $postagem = $sql_query->fetch_assoc();

    $title = $postagem['postTitle'];
    $desc = $postagem['postDesc'];

    $postsDest .=
        "<div class=\"post-destaque\">
            <h4>$title</h4>
            <p>$desc</p>
        </div>";
}


//Insere comentários
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comentText = $_POST['comentInput'];

    $sql_code = "SELECT * FROM coment WHERE comentText = '$comentText'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

    $quantidadeComent = $sql_query->num_rows;

    if ($quantidadeComent == 0) {
        $sql_code = "INSERT INTO coment (comentText, postID) VALUES ('$comentText', '1')";
        $sql_query = $mysqli->query($sql_code) or die($aviso = "Falha na execução do código SQL" . $mysqli->error);
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KellyBlog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body id="jquery">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

<body>
    <div class="header">
        <img src="" alt="Logo KellyBlog" width="20%" id="logo" onclick="clicado()">
        <ul class="navbar">
            <li class="navItem"><a href="../Menus/Menu-base/index.html">Menu</a></li>
            <li class="navItem" id="current"><a>Blog</a></li>
            <li class="navItem"><a href="../Lojas/lojas.html">Loja</a></li>
            <li class="navItem"><a href="../Sobres/sobres.html">Sobre</a></li>
            <li><img src="img/profileIcon.png" alt="Profile Icon" id="logoProfile"></li>
        </ul>
    </div>
    <div class="container">
        <div class="posts">
            <?php echo $posts ?>
            <!-- <div class="post" id="post-3">
                <h2>Título da Postagem 3</h2>
                <span class="data-post">29 de Abril de 2024</span>
                <img src="https://ahoratabasco.com/wp-content/uploads/2023/10/Dia-Internacional-del-Artista.jpg"
                    width="620px">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus quis laboriosam id, porro
                    vitae iure dolorem totam quia dignissimos fugit?</p>
                <div class="comment-section">
                    <h3>Comentários</h3>
                    <div id="comments-3">
                        Comentários serão inseridos aqui
                    </div>
                    <textarea id="commentInput-3" placeholder="Escreva um comentário..."></textarea>
                    <button onclick="addComment('post-3', 'commentInput-3', 'comments-3')">Enviar</button>
                </div>
            </div> -->
        </div>
        <div class="barra-lateral">
            <div class="conteudo-lateral">
                <h3>DESTAQUES</h3>

                <?php echo $postsDest ?>
                <!-- <div class="post-destaque">
                    <h4>Título do post</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nostrum porro consequatur quae!
                        Voluptates a corrupti, officiis incidunt molestias quo!</p>
                </div> -->
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="title">
            <h1>Aromaterapia / Artes</h1>
            <p>Vários tipos de aromas e artes!</p>
        </div>
        <div class="gallery">
            <img src="https://picsum.photos/id/1059/250/250" alt="many clothes and pictures">
            <img src="https://picsum.photos/id/1060/250/250" alt="someone preparing artisanal coffee">
            <img src="https://picsum.photos/id/225/250/250" alt="some tee">
            <img src="https://picsum.photos/id/163/250/250" alt="an empty table in a restaurant">
            <img src="https://picsum.photos/id/180/250/250" alt="a laptop with a notebook">
            <img src="https://picsum.photos/id/20/250/250" alt="a laptop and many books around it">
        </div>
    </div>
</body>

</html>

<script>
    window.onload = function () {
        let tipo = sessionStorage.getItem("Tipo");
        if (tipo == null)
            tipo = "true";
        if (tipo == "true")
            $('#logo').prop("src", "img/logoAroma.jpg");
        else if(tipo == "false")
            $('#logo').prop("src", "img/kellyLogo.png");

    } 

    function clicado(){
        window.location.href = "../Menus/Menu-base/index.html"
    }
</script>

<style>
    #btnComment{
        justify-content: center;   
    }
</style>