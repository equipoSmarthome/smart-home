<?php
require_once 'conexion.php';

Class insertarUser {
    static public function insertarUsuario($tabla, $correo, $mac, $pass){
        $sql = Conexion::conectar()->prepare("INSERT INTO $tabla (id_Usuario, Correo_Usuario_1, Contraseña, Licencia, Mac, Nivel) VALUES (NULL, '$correo', '$pass', '$pass', '$mac', 1) ");

        $sql1 = Conexion::conectar()->prepare("DELETE FROM usuario_pendiente WHERE correo_pendiente = '$correo' ");

        $sql2 = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE Correo_Usuario_1 = '$correo'");

        $sql -> execute();
        $sql1 -> execute();
        $sql2 -> execute();
        $fila = $sql2->fetch();
        if ($sql2->rowCount() == 1 ) {  
            $idUsuario = $fila[0];
            $sql4 = Conexion::conectar()->prepare("INSERT INTO dispositivos_casa (id_Usuario, id_Dispositivo, Estado_Dispositivo) VALUES ($idUsuario, 1, 0), ($idUsuario, 2, 0), ($idUsuario, 3, 0), ($idUsuario, 4, 0), ($idUsuario, 5, 0), ($idUsuario, 6, 0), ($idUsuario, 7, 0), ($idUsuario, 8, 0), ($idUsuario, 9, 0), ($idUsuario, 10, 0), ($idUsuario, 11, 0), ($idUsuario, 12, 0), ($idUsuario, 13, 0)");
            $sql4 -> execute();
        }
		echo 1;
        }
    }
    







?>