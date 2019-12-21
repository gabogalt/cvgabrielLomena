<?php
session_start();
// echo('inicie sesion');
if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])){
require_once('php/conexion.php');
    // print_r($_FILES['fotoUsuario']);
    $temporal = $_FILES['fotoUsuario']['tmp_name'];
    $idUsuario = $_SESSION['idUsuario'];
	$fotoUsuarioUnica = "images/" .uniqid().".jpg";
	$fotoUsuarioUnica = "images/" .uniqid().".png";
	$resultado = move_uploaded_file($temporal, $fotoUsuarioUnica);
	if($resultado) { // que todo salio bien y la imagen se subio
		// vamos a actualizar la tabla usuarios ingresando en el campo foto el valor de imagenunica
		echo "Imagen subida correctamente";
		$actualizarfoto = "UPDATE usuarios set foto='$fotoUsuarioUnica' where id ='$idUsuario'";
		mysqli_query($conexion,$actualizarfoto) or die(mysqli_error($conexion));
		header('Location:perfil.php');

}else{
    
   echo $resultado;
}
}



?>
