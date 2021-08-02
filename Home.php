
<?php
session_start();
if($_SESSION['nombre']==null){
header('Location: Login.php');
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<link href="css/estilos.css" rel="stylesheet" type="text/css"/>
		<title>Home</title>
	</head>
	<body>
		<div class="titulo">Bienvenido <?php echo $_SESSION['nombre']; ?>
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
	</body>
</html>
