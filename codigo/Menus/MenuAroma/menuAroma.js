function getQueryParameter(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
}
const valor = getQueryParameter('int');
console.log(valor);
if(valor == 1){
    adicionarAroma();
}
else{
    adicionarArtes();
}
function adicionarArtes(){
    const body = document.querySelector("body");
    body.innerHTML += `
    <header>
    <img src="" alt="logo">
    <nav>
        <ul>
            <li>Menu</li>
            <li>Blog</li>
            <li>Loja</li>
            <li>Sobre</li>
            <li><img src="" alt="Perfil"></li>
        </ul>
    </nav>
</header>
<article>
    <section id="intro"></section>
    <section id="products"></section>
</article>
<footer></footer>
    `;
}