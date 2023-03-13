<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php
	
	include("../dll/config.php");
	include("../dll/class_mysqli.php");

	$miconexion= new class_mysqli();
	$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

	$accion=$_POST['accionBoton'];
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$direccion=$_POST['direccion'];	
	$telefono=$_POST['telefono'];	
	$fechaNacimiento=$_POST['fechaNacimiento'];
	$correo=$_POST['correo'];

	if ($accion=="crearPersonal") {
		$sql="insert into personal value('', '$nombres','$apellidos','$correo','$telefono','$direccion','$fechaNacimiento')";"insert into persona values('','$nombres','$apellidos','$correo','$telefono','$direccion','$fechaNacimiento')";
		$resSql =$miconexion->consulta($sql);
	}

	if ($accion=="actualizarPersonal") {
		$idPersonal=$_POST['id'];
		$sql="update personal set nombres='$nombres',apellidos='$apellidos',direccion='$direccion',telefono='$telefono',fechaNacimiento='$fechaNacimiento',correo='$correo' where id=$idPersonal";	
		$resSql =$miconexion->consulta($sql);	
	}

	if ($resSql){
		echo '<script>alert("Sus datos se actualizaron correctamente";);</script>';
		echo "<script>location.href='personal.php'</script>";
	}else{
		echo "Error.. Problemas de sql";
	}
?>