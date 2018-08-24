$(document).ready(dockOk)
function dockOk(){
    $("#irLogin").click(irLogin)
    $("#volverInicio").click(volverInicio)
    $("#iniciarSesion").click(irMenu)
    $("#luz").click(irLuz)
    $("#temperatura").click(irTemp)
    $("#puerta").click(irPuerta)
    $("#eventos").click(irEventos)
    $("#volverMenu").click(volverMenu)
}
function irLogin(){
    window.location = "views/modulos/login.php"
}
function volverInicio(){
    window.location = "../../index.php"
}
function irMenu(){
	window.location = "../menu.php"
}
function irLuz(){
	window.location = "modulos/luces.php"
}
function irTemp(){
	window.location = "modulos/temperatura.php"
}
function irPuerta(){
	window.location = "modulos/puerta.php"
}
function irEventos(){
	window.location = "modulos/eventos.php"
}
function volverMenu(){
	window.location = "../menu.php"
}