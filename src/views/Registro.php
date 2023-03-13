<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro Eventos UTPL</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="../../images/logo.png" sizes="32x32" />
    <link rel="icon" href="../../images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../../images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
<div class="contenedor">
	<header class="cabeceraPrincipal">
		<section class="logotipo"><img src="../../images/logotipoPet.png" style="width: 120px; height:  50px"></section>
		<nav class="menuPrincipal">
			<a href="">Inicio</a>
			<a href="">Registro</a>
            <a href="">Certificados</a>
            <a href="">Reportes</a>
		</nav>
	</header>
	<main>
	<h2>Formulario de Registro</h2>
	 <form method="post" action="../dll/procesar.php">
	 	<div class="grupoInput">
	 		<label for="nombres">Nombres <span class="alerta">*</span></label>
	 		<input type="text" name="nombres" id="nombres" placeholder="Ingrese sus nombres" required>
	 	</div>
	 	<div class="grupoInput">
	 		<label for="apellidos">Apellidos <span class="alerta">*</span></label>
	 		<input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos" required>
	 	</div>
         <div class="grupoInput">
	 		<label for="cedula">Cédula<span class="alerta">*</span></label>
	 		<input type="text" name="cedula" id="cedula" placeholder="Ingrese su cédula de identificación"required>
	 	</div>
	 	<div class="grupoInput">
	 		<label for="correo">Correo<span class="alerta">*</span></label>
	 		<input type="email" name="correo" id="correo" placeholder="Ingrese sus correo"required>
	 	</div>
	 	<div class="grupoInput">
	 		<label for="direccion">Dirección<span class="alerta">*</span></label>
	 		<input type="text" name="direccion" id="direccion" placeholder="Ingrese sus direccion"required>
	 	</div>
	 	<div class="grupoInput">
	 		<label for="telefono">Telefono<span class="alerta">*</span></label>
	 		<input type="number" name="telefono" id="telefono" placeholder="Ingrese sus telefono" required>
	 	</div>
		 <div class="grupoInput">
	 		<label for="pais">País<span class="alerta">*</span></label>
	 		<input type="text" name="pais" id="pais" placeholder="Ingrese su país" required>
	 	</div>
		 <div class="grupoInput">
	 		<label for="ciudad">Ciudad<span class="alerta">*</span></label>
	 		<input type="text" name="ciudad" id="ciudad" placeholder="Ingrese su Ciudad" required>
	 	</div>
		 <div class="grupoInput">
	 		<label for="institucion">Institución<span class="alerta">*</span></label>
	 		<input type="text" name="institucion" id="institucion" placeholder="Ingrese la Institución que se encuentra" required>
	 	</div>
	 	<div class="grupoInput">
	 		<label for="Tipo">Tipo de usuario a inscribirse</label>
			 <select name="Tipo" id="Tipo" class="select-css">
				<option value="1">Profecional</option>
				<option value="2">Estudiante</option>
			</select>
	 	</div>
	 	
	 	<div class="btn-center">
	 	<button class="boton" type="submit" name="accionBoton" value="crearPersonal" >Guardar</button>
	 	</div>
	 </form>
</main>
	
	<section class="sponsor">
		<section class="logo">
		<img src="../../images/logotipoPet.png"style="width: 120px; height:  50px">
		</section>
		<section class="escudo">
		<img src="../../images/escudo.png" style="width: 200px; height:  65px">
		</section>
	</section>
	<footer class="piePagina">
		<section class="derechos">
		<h6>Derechos Reservados UTPL 2023</h6>
	</section>

     <nav class="redesSociales">
		<a href=""><i class="fa-brands fa-facebook"></i></a>
		<a href=""><i class="fa-brands fa-instagram"></i></a>
		<a href=""><i class="fa-brands fa-tiktok"></i></a>
	</nav>	
</footer>
</div>
</body>
</html>