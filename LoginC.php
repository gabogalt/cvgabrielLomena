<?php
	session_start();

require_once('php/conexion.php');

	$usuario1 = $_POST['usuario1'];
	$password1 = md5($_POST['password1']);
	

	if(isset($usuario1) && !empty($usuario1) && isset($password1) && !empty($password1))
		{
		$queryLogin = "SELECT * from usuarios where usuario='$usuario1' and password='$password1'";
		$resultado = mysqli_query($conexion,$queryLogin) or die(mysqli_error($conexion));

		$numeroUsuarios = mysqli_num_rows($resultado);

			if($numeroUsuarios > 0)
			{
				$datosUsuario = mysqli_fetch_array($resultado);
				$_SESSION['idUsuario'] = $datosUsuario['id'];
				
				
				header("Location:index.php");

			} else 
				{
					echo "OK";
				}
		}
?>
