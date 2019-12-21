<?php
session_start();
if (isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])){
    require_once('php/conexion.php');

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $idUsuario = $_SESSION['idUsuario'];
  

   $consulta = "UPDATE usuarios set usuario ='$usuario' where id ='$idUsuario'";

   $query = mysqli_query($conexion,$consulta) or die (msqli_error($conexion));

   $consulta2 = "UPDATE registro set nombre='$nombre', apellido='$apellido', correo='$correo' where id = '$idUsuario'";
   $query= mysqli_query($conexion,$consulta2) or die (mysqli_error($conexion));
   
   echo ("OK");
}else {
    header('Location:Login.php');
}
?>