<?php
require_once('conexion.php');
// Clase usuario se definiran los metodos Getter (Obtener) y Setter (Modificar)
class Usuario {
    //variables
    private $id;
    private $correo;
    private $pass;
    //Obtenemos los valores de los usuarios
    public function getId(){
        return $this->id;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function getPass(){
        return $this->pass;
    }
}

class validarLogin {
    
}




?>