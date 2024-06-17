<?php

include ('conexao.php');

$sql_code = "SELECT * FROM user WHERE email = '$email' AND senha = '$senha'";
$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

$quantidade = $sql_query->num_rows;

$usuario = $sql_query->fetch_assoc();

for($i; $i < $quantidade; $i++){

}
$usuario['id']


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
        <img src="img/kellyLogo.png" alt="Logo KellyBlog" id="logo">
        <ul class="navbar">
            <li class="navItem"><a href="#">Menu</a></li>
            <li class="navItem"><a href="#">Blog</a></li>
            <li class="navItem"><a href="#">Loja</a></li>
            <li class="navItem"><a href="#">Sobre</a></li>
            <li><img src="img/profileIcon.png" alt="Profile Icon" id="logoProfile"></li>
        </ul>
    </div>
    <div class="container">
        <div class="posts">
            <div class="post" id="post-1">
                <h2>Título da Postagem 1</h2>
                <span class="data-post">29 de Abril de 2024</span>
                <img src="https://www.colegiodosjesuitas.com.br/wp-content/uploads/2021/08/Artigo_Site_Dia-das-Artes.jpg"
                    width="620px">
                <p>Descrição postagem</p>
                <div class="comment-section">
                    <h3>Comentários</h3>
                    <div id="comments-1">
                        <!-- Comentários serão inseridos aqui -->
                    </div>
                    <textarea id="commentInput-1" placeholder="Escreva um comentário..."></textarea>
                    <button onclick="addComment('post-1', 'commentInput-1', 'comments-1')">Enviar</button>
                </div>
            </div>
            <div class="post" id="post-2">
                <h2>Título da Postagem 2</h2>
                <span class="data-post">29 de Abril de 2024</span>
                <img src="https://ceugaleria.com.br/galeria/wp-content/uploads/2019/11/Conheca-5-belas-artes-famosas-na-histo%CC%81ria-da-arte-noite-estrelada-ceu-galeria.jpg"
                    width="620px">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus quis laboriosam id, porro
                    vitae iure dolorem totam quia dignissimos fugit?</p>
                <div class="comment-section">
                    <h3>Comentários</h3>
                    <div id="comments-2">
                        <!-- Comentários serão inseridos aqui -->
                    </div>
                    <textarea id="commentInput-2" placeholder="Escreva um comentário..."></textarea>
                    <button onclick="addComment('post-2', 'commentInput-2', 'comments-2')">Enviar</button>
                </div>
            </div>
            <div class="post" id="post-3">
                <h2>Título da Postagem 3</h2>
                <span class="data-post">29 de Abril de 2024</span>
                <img src="https://ahoratabasco.com/wp-content/uploads/2023/10/Dia-Internacional-del-Artista.jpg"
                    width="620px">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus quis laboriosam id, porro
                    vitae iure dolorem totam quia dignissimos fugit?</p>
                <div class="comment-section">
                    <h3>Comentários</h3>
                    <div id="comments-3">
                        <!-- Comentários serão inseridos aqui -->
                    </div>
                    <textarea id="commentInput-3" placeholder="Escreva um comentário..."></textarea>
                    <button onclick="addComment('post-3', 'commentInput-3', 'comments-3')">Enviar</button>
                </div>
            </div>
        </div>
        <div class="barra-lateral">
            <div class="conteudo-lateral">
                <h3>DESTAQUES</h3>
                <div class="post-destaque">
                    <h4>Título do post</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nostrum porro consequatur quae!
                        Voluptates a corrupti, officiis incidunt molestias quo!</p>
                </div>
                <div class="post-destaque">
                    <h4>Título do post</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nostrum porro consequatur quae!
                        Voluptates a corrupti, officiis incidunt molestias quo!</p>
                </div>
                <div class="post-destaque">
                    <h4>Título do post</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nostrum porro consequatur quae!
                        Voluptates a corrupti, officiis incidunt molestias quo!</p>
                </div>
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
    <script>
        function loadComments(postId, commentsId) {
            var comments = JSON.parse(localStorage.getItem(postId) || '[]');
            comments.forEach(comment => {
                addCommentElement(commentsId, comment.text, comment.date);
            });
        }

        function addCommentElement(commentsId, commentText, commentDate) {
            var comment = document.createElement("div");
            comment.className = "comment";

            var commentContent = document.createElement("p");
            commentContent.textContent = commentText;

            var commentDateElem = document.createElement("div");
            commentDateElem.className = "comment-date";
            commentDateElem.textContent = commentDate;

            var deleteButton = document.createElement("button");
            deleteButton.textContent = "Excluir";
            deleteButton.className = "delete-button";
            deleteButton.onclick = function () {
                comment.remove();
                saveComments();
            };

            comment.appendChild(commentContent);
            comment.appendChild(commentDateElem);
            comment.appendChild(deleteButton);
            document.getElementById(commentsId).appendChild(comment);
        }

        function addComment(postId, inputId, commentsId) {
            var commentInput = document.getElementById(inputId);
            var commentText = commentInput.value;
            if (commentText) {
                var now = new Date();
                var commentDate = now.toLocaleString();
                addCommentElement(commentsId, commentText, commentDate);

                var comments = JSON.parse(localStorage.getItem(postId) || '[]');
                comments.push({ text: commentText, date: commentDate });
                localStorage.setItem(postId, JSON.stringify(comments));

                commentInput.value = "";
            }
        }

        function saveComments() {
            var posts = document.querySelectorAll('.post');
            posts.forEach(post => {
                var postId = post.id;
                var comments = [];
                post.querySelectorAll('.comment').forEach(comment => {
                    comments.push({
                        text: comment.querySelector('p').textContent,
                        date: comment.querySelector('.comment-date').textContent
                    });
                });
                localStorage.setItem(postId, JSON.stringify(comments));
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
            var posts = document.querySelectorAll('.post');
            posts.forEach(post => {
                var postId = post.id;
                var commentsId = "comments-" + postId.split('-')[1];
                loadComments(postId, commentsId);
            });
        });

        window.setInterval(function () {
            if ($(window).width() < 1200) {
                $('#logo').prop("src", "img/kellyLogo-vertical-trans.png");
            }
            else {
                $('#logo').prop("src", "img/kellyLogo.png");
            }
        }, 1)
    </script>
</body>

</html>