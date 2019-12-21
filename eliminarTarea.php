<?php
session_start();

if (isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])){
   
    require_once('php/conexion.php');
    $idUsuario = $_SESSION['idUsuario'];
    $id = $_GET['id'];
    echo $id;
    $consulta  = "DELETE  from lista_tareas where idUsuario ='$idUsuario' and id= '$id'  ";
    $query = mysqli_query($conexion, $consulta) or die (mysqli_error($conexion));
    



    header("Location: index.php");
}else {
    echo "no se pudo eliminar el proyecto";
}


?>