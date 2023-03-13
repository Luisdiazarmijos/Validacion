<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Happy Pets</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="../images/logo.png" sizes="32x32" />
    <link rel="icon" href="../images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
<div class="contenedor">
	<header class="cabeceraPrincipal">
		<section class="logotipo"><img src="../images/logotipoPet.png"></section>
		<nav class="menuPrincipal">
			<a href="../">Inicio</a>
			<a href="servicios.php">Servicios</a>
			<a href="#">Productos</a>
			<a href="adopcion.php">Adopción</a>
			<a href="personal.php">Personal</a>
		</nav>
	</header>
	<main>
	<h2>Formulario de adopción</h2>
	 <form method="post" action="procesar.php">
	 	<div class="grupoInput">
	 		<label for="nombres">Nombres <span class="alerta">*</span></label>
	 		<input type="text" name="nombres" id="nombres" placeholder="Ingrese sus nombres" required>
	 	</div>
	 	<div class="grupoInput">
	 		<label for="apellidos">Apellidos <span class="alerta">*</span></label>
	 		<input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos" required>
	 	</div>
	 	<div class="grupoInput">
	 		<label for="correo">Correo</label>
	 		<input type="email" name="correo" id="correo" placeholder="Ingrese sus correo">
	 	</div>
	 	
	 	<div class="grupoInput">
	 		<label for="telefono">Telefono<span class="alerta">*</span></label>
	 		<input type="number" name="telefono" id="telefono" placeholder="Ingrese sus telefono" required>
	 	</div>
	 	<div class="grupoInput">
	 		<label for="direccion">Dirección</label>
	 		<input type="text" name="direccion" id="direccion" placeholder="Ingrese sus direccion">
	 	</div>
	 	<div class="grupoInput">
	 		<label for="fechaNacimiento">Fecha de Nacimiento</label>
	 		<input type="date" name="fechaNacimiento" id="fechaNacimiento" placeholder="Ingrese su  fecha de Nacimiento">
	 	</div>
	 	
	 	<div class="btn-center">
	 	<button class="boton" type="submit" name="accionBoton" value="crearPersonal" >Guardar</button>
	 	</div>
	 </form>
</main>
	
	<section class="sponsor">
		<section class="logo">
		<img src="../images/logotipoPet.png">
		</section>
		<section class="escudo">
		<img src="../images/escudo.png">
		</section>
	</section>
	<footer class="piePagina">
		<section class="derechos">
		<h6>Derechos Reservados UTPL 2022</h6>
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