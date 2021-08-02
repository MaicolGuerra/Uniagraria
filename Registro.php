<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href="css/estilos.css" rel="stylesheet" type="text/css"/>
		<title>Registro Usuario</title>
	</head>
	<body>
		<div class="titulo">Registro Usuario</div>
		<center>
			<form method="POST" action="RegistroUsuario.php">
				<table width="80%">
					<tr>
						<td>
							<div class="mb-3">
				  				<label class="form-label">Nombres</label>
				  				<input type="text" class="form-control" name="nombres" required>
							</div>
						</td>
						<td>
							<div class="mb-3">
				  				<label class="form-label">Apellidos</label>
				  				<input type="text" class="form-control" name="apellidos" required>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="mb-3">
				  				<label class="form-label">Correo</label>
				  				<input type="email" class="form-control" name="correo" required>
							</div>
						</td>
						<td>
							<select class="form-select" aria-label="Default select example" name="programa"required>
				  				<option selected>Seleccionar Programa</option>
				  				<option value="MedicinaVeterinaria">Medicina Veterinaria</option>
				  				<option value="Derecho">Derecho</option>
				  				<option value="IngenieriaCivil">Ingeniería Civil</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-check">
				  				<input class="form-check-input" type="checkbox" required>
				  				<label class="form-check-label">
				    				Aceptar terminos y condiciones
				  				</label>
							</div>
						</td>
					</tr>
				</table>
				<button type="submit">Registrar</button>
			</form>
		</center>
	</body>
</html>