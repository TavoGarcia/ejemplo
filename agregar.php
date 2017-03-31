<?php 

include("conexion.php");

$con=mysqli_connect($host, $user, $pw, $db);

if (isset($_POST['usuario']) && !empty($_POST['usuario'])
 && isset($_POST['contrasena']) && !empty($_POST['contrasena'])) 
{

$registrar = "UPDATE acceder SET pass ='$_POST[contrasena]' WHERE user = '$_POST[usuario]'";
  		mysqli_query($con, $registrar);
  		header('Location: index.php');
  		
}

else
{
	echo "Debes llenar todos los campos";
}

 ?>