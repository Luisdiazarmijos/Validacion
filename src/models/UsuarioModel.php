<?php
    require_once "../dll/config.php";
    require_once "../dll/class_mysql.php";

    class UsuarioModel{
        private $IdUsuario;
        private $Nombre;
        private $Apellido;
        private $Identificacion;
        private $Correo;
        private $Direccion;
        private $Telefono;
        private $Pais;
        private $Ciudad;
        private $Institucion;
        private $Tipo;

        public function setNombre($Nombre){
            $this->Nombre = $Nombre;
        }
        public function setApellido($Apellido){
            $this->Apellido = $Apellido;
        }
        public function setIdentificacion($Identificacion){
            $this->Identificacion = $Identificacion;
        }
        public function setCorreo($Correo){
            $this->Correo = $Correo;
        }
        public function setDireccion($Direccion){
            $this->Direccion = $Direccion;
        }
        public function setTelefono($Telefono){
            $this->Telefono = $Telefono;
        }
        public function setPais($Pais){
            $this->Pais = $Pais;
        }
        public function setCiudad($Ciudad){
            $this->Ciudad = $Ciudad;
        }
        public function setInstitucion($Institucion){
            $this->Institucion = $Institucion;
        }
        public function setTipo($Tipo){
            $this->Tipo = $Tipo;
        }

    }


?>