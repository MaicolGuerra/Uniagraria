<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href="css/estilos.css" rel="stylesheet" type="text/css"/> 
	</head>
	<body>
		<div class="titulo">BIENVENIDO</div>
		<center>
			<br>
			<form method="POST" action="validacion.php">
				<div class="mb-3">
					 <label class="form-label">INICIAR SESIÓN</label>
					  <input type="email" class="form-control" style="width: 20%" name="correo" required>
					  <div id="emailHelp" class="form-text">Por favor ingrese la dirección de correo con la cual se registro.</div>
				</div>
				<button type="submit" class="btn btn-success">Ingresar</button>
				<a href="Registro.php">Registrarse</a>
			</form>
		</center>
	</body>
</html>
