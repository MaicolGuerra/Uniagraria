<?php
include "conexion.php";
session_start();
$correo=$_SESSION['correo'];
$sql="INSERT INTO visitas (correo,programaInteres) VALUES ('{$correo}','Derecho')";
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
		<title>Derecho</title>
	</head>
	<body>
		<div class="titulo">Área de Derecho
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
			<iframe width="560" height="315" src="https://www.youtube.com/embed/v_ZK41FP4_U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<br>
		</center>
			<div class="izquierda">
				<b>Misión</b><br>
				Formar abogados con sólidos conocimientos en las Ciencias Jurídicas, fundamentados en los principios constitucionales y especialmente en el Derecho Ambiental y Agrario; con un alto sentido humanístico, ético, crítico, integral, propositivo, creativo y emprendedor, comprometidos con el bienestar de la comunidad nacional e internacional, mediante la creación y la difusión gradual de conocimientos a través de la investigación, la docencia, la educación continua y la extensión, siendo multiplicadores de los valores y principios constitucionales, que contribuyan a la construcción y conservación del orden social, del ambiente, al desarrollo del sector agrario y al fomento del espíritu empresarial en el contexto de la internacionalización, con el propósito de consolidar el Estado Social de Derecho.
			</div>
			<div class="derecha">
				<b>Visión</b> <br>
				El Programa de Derecho de UNIAGRARIA se propone ser reconocido por la formación integral de Abogados, con énfasis en Derecho Ambiental y Agrario, por su alta calidad e importantes aportes a la investigación jurídica.
			</div>
	</body>
</html>