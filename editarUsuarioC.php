<?php
session_start();
if (isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario']) ){
require_once('php/conexion.php');
$idUsuario = $_SESSION['idUsuario'];
$nombreProyecto = $_POST['nombreProyecto'];
$nombreCliente = $_POST['nombreCliente'];
$correo = $_POST['correo'];
$monto = $_POST['monto'];
$descripcionP = $_POST['descripcionP'];
$numeroOrden = $_POST['numeroOrden'];


$consulta =  "UPDATE proyectos set nombreCliente='$nombreCliente', nombreProyecto ='$nombreProyecto', correo='$correo', monto= '$monto' where idUsuario='$idUsuario' and numeroOrden='$numeroOrden'";

$query = mysqli_query($conexion, $consulta) or die (mysqli_error($conexion));

$consulta2 =  "UPDATE descripcion_proyecto set  descripcionP='$descripcionP' where idUsuario='$idUsuario' and numeroOrden='$numeroOrden'";


$query2 = mysqli_query($conexion, $consulta2 ) or die (mysqli_error($conexion));

echo "SI";

header('Location:proyecto.php');




}else{
    echo ("NO");
    header('Locatio:Login.php');
}
?>