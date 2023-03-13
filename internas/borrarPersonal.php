<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php
	
	include("../dll/conexion.php");
	
	$idPersonal = $_GET['id'];
    $sql="delete from personal where id=$idPersonal";

	$resSql=mysqli_query($conexion, $sql);
	if ($resSql){
		echo '<script>alert("Sus datos se eliminaron correctamente";);</script>';
		echo "<script>location.href='personal.php'</script>";
			}else{
		echo "Error.. Problemas de sql";
	}
	
?>