<?php 
	//Se definen los metodos setter y getter
	class Usuario{
		//Variables
		private $id;
		private $correo;
		private $clave;
		private $mac;
		private $licencia;

		//Metodo Get
		public function getId(){
			return $this->id;
		}
		public function getCorreo(){
			return $this->correo;
		}
		public function getClave(){
			return $this->clave;
		}
		public function getMac(){
			return $this->mac;
		}
		public function getLicencia(){
			return $this->licencia;
		}

		//Metodo Set
		public function setId($id){
			$this->id = $id;
		}
		public function setCorreo($correo){
			$this->correo = $correo;
		}
		public function setClave($clave){
			$this->clave = $clave;
		}
		public function setMac($mac){
			$this->mac = $mac;
		}
		public function setLicencia($licencia){
			$this->licencia = $licencia;
		}
	}
?>