<?php
session_start();

if (isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])){
   
    require_once('php/conexion.php');
    $idUsuario = $_SESSION['idUsuario'];
    $numeroOrden = $_GET['numeroOrden'];
    echo $numeroOrden;
    $consulta  = "DELETE  from proyectos where idUsuario ='$idUsuario' and numeroOrden = '$numeroOrden'  ";
    $query = mysqli_query($conexion, $consulta) or die (mysqli_error($conexion));
    $consulta2  = "DELETE  from descripcion_proyecto where idUsuario ='$idUsuario' and numeroOrden = '$numeroOrden'  ";
    $query2 = mysqli_query($conexion, $consulta2) or die (mysqli_error($conexion));




    header("Location: proyecto.php");
}else {
    echo "no se pudo eliminar el proyecto";
}


?>