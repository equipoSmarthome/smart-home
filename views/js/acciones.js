$(document).ready(dockOk)
function dockOk(){
    $("#irLogin").click(irLogin)
    $("#volverInicio").click(volverInicio)
}
function irLogin(){
    window.location = "views/modulos/login.php"
}
function volverInicio(){
    window.location = "../../index.html"
}