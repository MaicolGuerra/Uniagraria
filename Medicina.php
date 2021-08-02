<?php
include "conexion.php";
session_start();
$correo=$_SESSION['correo'];
$sql="INSERT INTO visitas (correo,programaInteres) VALUES ('{$correo}','Medicina Veterinaria')";
mysqli_query($conect,$sql);

if($_SESSION['correo']==null){
header('Location: Login.php');
}
?>

<!DOCTYPE html>
<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href="css/estilos.css" rel="stylesheet" type="text/css"/>
		<title>Medicina Veterinaria</title>
	</head>
	<body>
		<div class="titulo">Área Medicina Veterinaria
			<div align="right">
				<a href="finalizarSesion.php"><button class="btn btn-success">Cerrar Sesión</button></a>
			</div>
		</div>
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  	<div class="container-fluid" style="background: #66CC32">
		    	<img src="Imagen/logo.png" class="img-responsive d-inline-block align-text-top" >
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
		    	<div class="navbar-collapse collapse" id="navbarNav">
				    <ul class="navbar-nav">
				    	<li class="nav-item">
				        	<a class="nav-link active palabra" aria-current="page" href="Medicina.php">Medicina Veterinaria |</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link active palabra" aria-current="page" href="Derecho.php">Derecho |</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link active palabra" aria-current="page" href="Ingenieria.php">Ingenieria Civil</a>
				        </li>
				    </ul>
		    	</div>
		  	</div>
		</nav>
		<center>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/uzbx2E2vmPI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</center>
		<div class="izquierda">
				<b>Misión</b><br>
				Contribuir al desarrollo del país, mediante la formación ética de profesionales en las ciencias veterinarias, la investigación y la extensión relacionadas, principalmente, con la salud pública, la seguridad alimentaria y el bienestar animal, bajo el concepto de “Un Mundo, Una Salud”.
			</div>
			<div class="derecha">
				<b>Visión</b> <br>
				En el año 2025 el programa será reconocido a nivel nacional e internacional por su calidad académica y sus aportes en salud pública, seguridad alimentaria y bienestar animal.
			</div>
	</body>
</html>