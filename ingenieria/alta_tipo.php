﻿<?php 
$enlace = mysqli_connect("localhost", "root", "", "couchinn");

/* comprobar la conexión */
if ($enlace->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}

$descripcion = $_POST['descripcion'];
$estado = $_POST['estado'];

$valida = "SELECT descripcion FROM tipo WHERE '$descripcion' = descripcion";
$r = mysqli_query($enlace,$valida) or die ("Error: ".mysqli_error($enlace));

if ($r->num_rows == 0){
$sql = "INSERT INTO tipo (descripcion, estado) VALUES ('$descripcion', '$estado')";
$res=mysqli_query($enlace,$sql);
echo'<script type="text/javascript">
                alert("Tipo de couch agregado exitosamente!");
                window.location="agregar_tipo.php"
                </script>';
}
else {
	echo'<script type="text/javascript">
                alert("¡Tipo de couch existente! Por favor ingrese otro ");
                window.location="agregar_tipo.php"
                </script>';
}
 ?>