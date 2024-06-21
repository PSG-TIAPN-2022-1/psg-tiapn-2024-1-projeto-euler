window.onload = function () {
    let tipo = sessionStorage.getItem("tipo");
    let conteudo = document.querySelector("main");
    if (tipo == null) {
        tipo = true
    };
    tipo = true;
    if (tipo) {
        conteudo.innerHTML =
            `
<head>
<link rel="stylesheet" href="menuAroma.css">
</head>
<body>
<div class="header">
    <img src="/codigo/assets/logoAroma.jpg" alt="" width="5%" style="margin-left: 5%;" id="logo">
    <ul class="navbar">
        <li class="navItem"><a href="#">Menu</a></li>
        <li class="navItem"><a href="#">Blog</a></li>
        <li class="navItem"><a href="#">Loja</a></li>
        <li class="navItem"><a href="#">Sobre</a></li>
        <li><img src="/codigo/assets/profileIcon.png" alt="" width="10%" id="logoProfile"></li>
    </ul>
</div>
<div class="grid">
    <div class="center">
        <div class="conteudo">
            <h1 class="title">Aromaterapia</h1>
            <p class="text">É a arte e a ciência que visa<br>promover a saúde e o bem-estar, <br>da mente e das
                emoções, através do uso.
            </p>
            <button id="bt">Saiba mais!</button>
        </div>
    </div>
    <div class="footer">
        <div class="title">
            <h1>Aromas</h1>
            <p>Vários tipos de aroma, muito leve, muito amor.</p>
        </div>
        <div class="gallery">
            <img src="https://picsum.photos/id/1059/250/250" alt="many clothes and pictures">
            <img src="https://picsum.photos/id/1060/250/250" alt="someone preparing artisanal coffee">
            <img src="https://picsum.photos/id/225/250/250" alt="some tee">
            <img src="https://picsum.photos/id/163/250/250" alt="an empty table in a restaurant">
            <img src="https://picsum.photos/id/180/250/250" alt="a laptop with a notebook">
            <img src="https://picsum.photos/id/20/250/250" alt="a laptop and many books around it">
        </div>
        <div class="troca">
            <button>Artes</button>
        </div>
    </div>
</div>
</body>
`;
    } else {
        conteudo.innerHTML =
            `
<head>
<link rel="stylesheet" href="menuArtes.css">
</head>

<body>
<div class="header">
    <img src="img/kellyLogo.png" alt="" width="20%" id="logo">
    <ul class="navbar">
        <li class="navItem" id="current"><a>Menu</a></li>
        <li class="navItem"><a href="projetoEuler/codigo/blog/blog.php">Blog</a></li>
        <li class="navItem"><a href="#" onclick="clicado(1)">Loja</a></li>
        <li class="navItem"><a href="#" onclick="clicado(2)">Sobre</a></li>
        <li><img src="img/profileIcon.png" alt="" width="10%" id="logoProfile"></li>
    </ul>
</div>
<div class="grid">
    <div class="center">
        <div class="conteudo">
            <h1 class="title">Artes</h1>
            <p class="text">Fotografia, Desenhos, Gravuras e Exposições você encontrará aqui<br>
                Nossa arte é a ciência que visa promover a saúde e o bem-estar: do corpo, da mente e das
                emoções.
            </p>
            <button id="bt" onclick="scroll()">Saiba mais!</button>
        </div>
    </div>
    <div class="footer">
        <div class="title">
            <h1>Exposições e Feiras</h1>
            <p>Vários encontros e produções únicos. Muita arte. Muito amor</p>
        </div>
        <div class="gallery">
            <img src="https://picsum.photos/id/1059/250/250" alt="many clothes and pictures">
            <img src="https://picsum.photos/id/1060/250/250" alt="someone preparing artisanal coffee">
            <img src="https://picsum.photos/id/225/250/250" alt="some tee">
            <img src="https://picsum.photos/id/163/250/250" alt="an empty table in a restaurant">
            <img src="https://picsum.photos/id/180/250/250" alt="a laptop with a notebook">
            <img src="https://picsum.photos/id/20/250/250" alt="a laptop and many books around it">
        </div>

        <div class="troca">
            <button onclick="clicado(3)">Aromaterapia</button>
        </div>
    </div>
</div>
</body>
`;
    }
}

function clicado(x) {
    let tipo = sessionStorage.getItem("tipo");
    if (tipo == null)
        tipo = true;

    if (tipo == true) {
        switch (x) {
            case 1:
                window.location.href = "/codigo/Lojas/lojaArtes/lojaArtes.html"
                break;
            case 2:
                window.location.href = "/codigo/Sobres/sobreArtes/sobreArtes.html"
                break;
            case 3:
                window.location.href = "/codigo/Menus/MenuAroma/menuAroma.html"
            default:
                break;
        }

    }
    else {
        switch (x) {
            case 1:
                window.location.href = "/codigo/Lojas/lojaAroma/lojaAroma.html"
                break;
            case 2:
                window.location.href = "/codigo/Sobres/sobreAroma/sobreAroma.html"
                break;
            case 3:
                window.location.href = "/codigo/Menus/MenuArtes/menuArtes.html"
            default:
                break;
        }
    }
}

function scroll() {
    window.scrollBy({
        top: 1200,
        behavior: 'smooth'
    });
}