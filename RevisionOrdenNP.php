<?php
require_once('php/conexion.php');
session_start();
if (isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario']) && isset($_POST['numeroOrden']) && !empty($_POST['numeroOrden'])){
$numeroOrden = $_POST['numeroOrden'];
$idUsuario = $_SESSION['idUsuario'];

$consulta = "SELECT * from proyectos  where numeroOrden ='$numeroOrden' and idUsuario='$idUsuario'";
$query = mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

$num_columnas = mysqli_num_rows($query);
if ($num_columnas >= 1 ){

    echo ("NO");
}
}else{
    header('Location:index.php');
}

?>