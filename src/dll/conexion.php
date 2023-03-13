<?php
$conexion= new mysqli("127.0.0.1","root","","examenweb");
if ($conexion->connect_errno) {
	echo "Hay problemas de conexión";
	
}
?>