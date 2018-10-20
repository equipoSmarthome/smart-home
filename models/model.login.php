<?php
    require_once "conexion.php";
    session_start();
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    

    if ($correo == "" || $pass == "" ) {
        echo 2;  
    } else { 
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $mysql = Conexion::conectar();
            $sql = "SELECT * FROM usuario_1 WHERE Correo_Usuario_1 = '$correo' ";
            $resultado = $mysql->query($sql);
            $fila = $resultado->fetch();
            if ($resultado->rowCount() == 1 ) {
                $sql = "SELECT * FROM usuario_1 WHERE Correo_Usuario_1 = '$correo' AND Contraseña = '$pass' ";
                $resultado = $mysql->query($sql);
                $fila = $resultado->fetch();
                if ($resultado->rowCount() == 1 ) {
                    $_SESSION['iduser'] = $fila[0];
                    $_SESSION['correo'] = $fila[1];
                    $_SESSION['pass'] = $fila[2];
                    $_SESSION['nivel'] = $fila[5];
                    echo "1";
                } else {
                    echo 3;
                }
            } else {
                $sql = "SELECT * FROM usuario_2 WHERE Correo_Usuario_2 = '$correo' AND Contraseña = '$pass' ";
                $resultado = $mysql->query($sql);
                $fila = $resultado->fetch();
                if ($resultado->rowCount() == 1 ) {
                    $_SESSION['iduser'] = $fila[3];
                    $_SESSION['correo'] = $fila[1];
                    $_SESSION['pass'] = $fila[2];
                    $_SESSION['nivel'] = $fila[4];
                    echo "1";
                } else {
                    echo 3;
                }
            }
        }else {
            echo 4;
        }
    }

?>