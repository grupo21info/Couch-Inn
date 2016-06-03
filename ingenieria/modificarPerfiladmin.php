﻿<?php
	$enlace = mysqli_connect("localhost", "root", "", "couchinn");

/* comprobar la conexión */
if ($enlace->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}
	session_start();
if(isset($_SESSION['correo']) and $_SESSION['estado'] == 'Autenticado'){
	echo ("Bienvenido ".$_SESSION['correo']);}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300italic,900' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	<title>Couch Inn</title>
</head>
<body>
	<div class="cerrar">
		<a href="cerrarSesion.php">Cerrar Sesion</a>
	</div>

<header>
	<hgroup>
	<div class="col-md-6 center-block quitar-float text-center">
		<img src="couchinn.png" width="500" height="100">
	</hgroup>
	
		<nav class="col-md-6 center-block quitar-float text-center">
			<ul>
				<li><a href="indexAdmin.php">Inicio</a></li>
				<li><a href="perfilAdmin.php">Perfil</a></li>
				<li><a href="faq.html">FAQ</a></li>
			</ul>
		</nav>
	</div>
</header>
	<div id="textoPr">

<form action="modificarPerfiladmin_carga.php" method="post">
 	<p><label for="correo">Introduzca su mail nuevamente: </label><input type="email" name="correo" required class="textarea"></input></p>

 	<p><input type="submit" id="btnSubmit2"></input></p>
 </form>
 </body>
 </html>