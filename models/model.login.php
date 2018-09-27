<?php
    require_once "conexion.php";
    session_start();
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    if ($correo == "" || $pass == "" ) {
        echo 2;  
    } else {      
        $mysql = Conexion::conectar();
        $sql = "SELECT * FROM usuario_1 WHERE Correo_Usuario_1 = '$correo' AND Contraseña = '$pass' ";
        $resultado = $mysql->query($sql);
        $fila = $resultado->fetch();
        if ($resultado->rowCount() == 1 ) {
            $_SESSION['correo'] = $fila[0];
            echo "1";
        } else {
            echo 3;
        }
    }

?>