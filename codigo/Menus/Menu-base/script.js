function clicado(x){
   switch(x){
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
function scroll() {
    window.scrollBy({
        top: 1200, 
        behavior: 'smooth' 
    });
}