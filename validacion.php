<?php
session_start();
include "conexion.php";

$correo=$_POST['correo'];




$sql="SELECT nombres from usuario where correo='$correo'";

$resultado=mysqli_query($conect,$sql);
$resul=mysqli_fetch_row($resultado);

$numero = mysqli_num_rows($resultado);

if ($numero>0) {
	$_SESSION["correo"]=$correo;
	$_SESSION["nombre"]=$resul[0];
	header('Location:home.php');
	
}else{
	$message = "Correo Invalido";
	echo "<script>";
	echo "alert('$message');";
	echo "window.location = 'Login.php';";
	echo "</script>";
}
?>