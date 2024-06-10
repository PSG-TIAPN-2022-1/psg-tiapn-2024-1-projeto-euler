window.onload = function () {
    let tipo = sessionStorage.getItem("tipo");
    if (tipo == null)
        tipo = true;
    if(tipo == true){
        $('.img-logo').prop("src", "img/logoAroma-trans.png");
    }
    else
        $('.img-logo').prop("src", "img/kellyLogo.png");
    
} 