$(document).ready(dockOk)
function dockOk(){
    $("#irLogin").click(irLogin)
    $("#volverInicio").click(volverInicio)
}
function irLogin(){
    window.location = "views/modulos/login.html"
}
function volverInicio(){
    window.location = "../../index.html"
}