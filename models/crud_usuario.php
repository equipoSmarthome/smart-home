<?php 
	require_once('conexion.php');
	require_once('usuario.php');
	
	class CrudUsuario{

		//inserta los datos del usuario, esto para registrar un nuevo usuario
		public function insertar($usuario){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO usuarios VALUES(NULL,:correo, :pass)');
			$insert->bindValue('correo',$usuario->getNombre());
			//encripta la clave.
			$pass=password_hash($usuario->getClave(),PASSWORD_DEFAULT);
			$insert->bindValue('pass',$pass);
			$insert->execute();
		}

		//obtiene el usuario para el login
		public function obtenerUsuario($nombre, $clave){
			$db=Conexion::conectar();
			$select=$db->prepare('SELECT * FROM usuarios WHERE correo=:correo');
			$select->bindValue('correo',$nombre);
			$select->execute();
			$registro=$select->fetch();
			$usuario=new Usuario();
			//verifica si la clave es correcta
			if (password_verify($clave, $registro['pass'])) {				
				//si es correcta, asigna los valores que trae desde la base de datos
				$usuario->setId($registro['id']);
				$usuario->setNombre($registro['correo']);
				$usuario->setClave($registro['pass']);
			}			
			return $usuario;
		}

		//Verifica si el correo del usuario existe, esto es solo para registrar un usuario
		public function buscarUsuario($correo){
			$db=Conexion::conectar();
			$select=$db->prepare('SELECT * FROM usuarios WHERE correo=:correo');
			$select->bindValue('correo',$correo);
			$select->execute();
			$registro=$select->fetch();
			if($registro['id']!=NULL){
				$usado=False;
			}else{
				$usado=True;
			}	
			return $usado;
		}
	}
?>