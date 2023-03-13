<?php

class class_mysqli{

	/*variables de conexión*/
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;

	/*Variables de identificacion de error y texto de error*/
	var $Error = "";
	var $Errno = 0;	
	/*identificacion de conexion y consulta*/
	var $Conexion_ID=0;
	var $Consulta_ID=0;

	/*constructor de la clase*/
	public function _construct($host="", $user="", $pass="", $db=""){
		@$this->BaseDatos=$db;
		@$this->Usuario=$user;
		@$this->Clave=$pass;
		@$this->Servidor=$host;		
		
	}

	/*conexion al servidor de db*/
	function conectar($host, $user, $pass, $db){
		if($host != "")$this->Servidor=$host;
		if($user != "")$this->Usuario=$user;
		if($pass != "")$this->Clave=$pass;
		if($db != "")$this->BaseDatos=$db;


		/*conectar al servidor*/  
		$this->Conexion_ID=new mysqli($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);
		if(!$this->Conexion_ID){
			echo"Error de conexión al servidor";
			return 0;
		}
		return$this->Conexion_ID;
	}
	/*consulta sql*/  
	function consulta($sql=""){
		if($sql==""){
			echo "Error de sql";
			return 0;
		}
		/*Ejecutar la cunsulta*/
		
		$this->Consulta_ID=mysqli_query($this->Conexion_ID, $sql);

		if(!$this->Consulta_ID){
			echo "Error en la sentencia sql";
			return 0;
		}
		return $this->Consulta_ID;
	}
	/*retorna el numero de campos de la consulta*/
	function numcampos(){
		return mysqli_num_fields($this->Consulta_ID);
	}
	/*retorna el número de registros de la consulta*/
	function numregistros(){
		return mysqli_num_rows($this->Consulta_ID);
	}
	/*Ver consulta tabla*/
	function verconsultaCRUD(){
		echo "<table class='tablecrud'>";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos(); $i++) { 
			echo "<td class='titleTable'>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
		}
		echo "<td class='titleTable'>Actualizar</td>";
		echo "<td class='titleTable'>Borrar</td>";
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td>".$row[$i]."</td>";
			}
			echo "<td><a href='actualizarPersonal.php?id=$row[0]'>Actualizar <i class='fa-solid fa-pen-to-square'></i></a></td>";
			echo "<td><a href='borrarPersonal.php?id=$row[0]'><i class='fa-solid fa-trash-can'></i></a></td>";
			echo "</tr>";
		}
		
		echo "</table>";
	}

	//ver consulta tabla 
	function verconsulta(){
		echo "<table border='1'>";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos(); $i++) { 
			echo "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
		}
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td>".$row[$i]."</td>";
			}
			echo "</tr>";
		}
		echo "</tr>";
		echo "</table>";
	}


//Obtener toda la informacion de una tabla
	function consulta_lista(){
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i=0; $i < $this->numcampos(); $i++) { 
				$row[$i];
			}
			return $row;
		}
	}
}	
?>