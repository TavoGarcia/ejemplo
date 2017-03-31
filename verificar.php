<?php 
session_start();
include("conexion.php");

if (isset($_POST['usu']) && !empty($_POST['usu']) && isset($_POST['contra']) && !empty($_POST['contra'])) 
{
	$con=mysqli_connect($host, $user, $pw, $db);
	
	$result=mysqli_query($con,"SELECT user, pass FROM acceder WHERE user='$_POST[usu]'");
	$sesion=mysqli_fetch_array($result);
	

	
	if ($_POST['contra'] == $sesion ['pass']) 
	{

	$_SESSION['username'] = $_POST['usu'];
	echo "Sesion exitosa";
	}
  
	else
	{
	echo "Datos incorrectos, verifiquelos ";
	}
}

else{
	echo "Debes llenar todos los campos";
}

 ?>

 