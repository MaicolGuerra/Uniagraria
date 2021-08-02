<?php
include "conexion.php";
$nombre=$_POST['nombres'];
$apellido=$_POST['apellidos'];
$correo=$_POST['correo'];
$programa=$_POST['programa'];

$sql="INSERT INTO usuario (nombres,apellidos,correo,programa) VALUES 
('{$nombre}',
'{$apellido}',
'{$correo}',
'{$programa}')";
$resultado=mysqli_query($conect,$sql);
if ($resultado) {
	$message = "Usuario Registrado Con Exito";
	echo "<script>";
echo "alert('$message');";
echo "window.location = 'Login.php';";
echo "</script>";
	
}else{
		$message = "Error al Registrar Usuario Intente de Nuevo";
	echo "<script>";
echo "alert('$message');";
echo "window.location = 'Registro.php';";
echo "</script>";
}
?>