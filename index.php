<?php
include "./include/cabecera.php";
include "./include/contenido.php";
include "./include/procesa.php";
include "./include/pie.php";

if(!isset($_REQUEST['fondo'])){
	$_REQUEST['fondo'] = 0;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PROYECTO FERNANDO BLASCO [ENTORNOS DE DESARROLLO]</title>
<link rel="icon" href="./images/ico.ico" type="image/x-icon">
<link rel="stylesheet" href="./css/estilos.css" type="text/css" media="all" />
</head>
<body class="background<?= $_REQUEST['fondo']; ?>">

<?php

print_r(cabecera("mando.png","Videojuegos retro"));

if(!isset($_REQUEST['procesar'])){
	print_r(contenido($juegosArray,$juegosNomArray,$arrayGenero,$arrayColor));
}else{
	print_r(resultado($juegosArray,$juegosNomArray,$arrayGenero,$arrayColor,$_REQUEST));
}
print_r(pie("Fernando Blasco Navarro","Proyecto - Entorno de desarrollo"));
?>
</body>
</html>