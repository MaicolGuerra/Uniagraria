<?php
include "conexion.php";
session_start();
$correo=$_SESSION['correo'];
$sql="INSERT INTO visitas (correo,programaInteres) VALUES ('{$correo}','Ingenieria Civil')";
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
		<title>Ingenieria Civil</title>
	</head>
	<body>
		<div class="titulo">Área Ingeniería Civil
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
			<iframe width="560" height="315" src="https://www.youtube.com/embed/MHwWePmuQJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</center>
		<div class="izquierda">
				<b>Misión</b><br>
				Coadyuvar en el desarrollo de la infraestructura de obras civiles locales, regionales y nacionales, a través de la formación de Ingenieros Civiles integrales, comprometidos, que se incorporen al mundo laboral y a la creación de empresas constructoras y consultoras, por medio de la ciencia y la técnica, la investigación y la proyección social; que trabajen con dedicación y excelencia y con liderazgo empresarial para que contribuyan al desarrollo económico y social del país, al mejoramiento del sector urbano y rural, a la conservación del medio ambiente y al uso adecuado de los recursos naturales.
		</div>
		<div class="derecha">
				<b>Visión</b> <br>
				El programa de Ingeniería Civil de la Fundación Universitaria Agraria de Colombia UNIAGRARIA será reconocido por liderar procesos formación enfocados en la investigación tecnológica y científica aplicada al desarrollo en diferentes contextos especialmente en los territorios rurales del País, formando profesionales competentes, integrales, emprendedores y con sólidas bases de responsabilidad y de conciencia por la preservación y el cuidado de los recursos naturales, que responde al desarrollo prospectivo de la Ingeniería Civil y a las necesidades de infraestructura regional, nacional e internacional, coadyuvando en el desarrollo empresarial y económico del País.
		</div>
	</body>
</html>