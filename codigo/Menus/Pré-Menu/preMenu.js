function clicadoAroma(){
    window.location.href = "/codigo/Menus/MenuAroma/menuAroma.html"
    sessionStorage.setItem("Tipo", true); //True == Aroma
}
function clicadoArtes(){
    window.location.href = "/codigo/Menus/Menu-base/index.html"
    sessionStorage.setItem("Tipo", false); //False == Arte
}
