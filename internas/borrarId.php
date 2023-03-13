<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php
	
	include("../dll/conexion.php");

	$idPersonal=$_POST['idPersonal'];
	

//$sql="insert into personal value('', '$nombres','$apellidos','$correo','$telefono','$direccion','$fechaNacimiento')";

	//delete borrra toda la tabla
		$sql="delete from personal where id=$idPersonal";
 	//update modifica los datos mencionados
    	//$sql="update personal set nombres='Angelita', apellidos='Carrión' where id=1";


$resSql=mysqli_query($conexion, $sql);
	if ($resSql){
		echo '<script>alert("Sus datos se eliminaron correctamente";);</script>';
		echo "<script>location.href='../'</script>";
			}else{
		echo "Error.. Problemas de sql";
	}
?>