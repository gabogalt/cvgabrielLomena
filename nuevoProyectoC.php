<?php
require_once('php/conexion.php');
session_start();

if(isset($_POST['nombreProyecto']) && !empty($_POST['nombreProyecto']) && isset($_POST['numeroOrden']) && !empty($_POST['numeroOrden']) && isset($_POST['nombreCliente']) && !empty($_POST['nombreCliente']) && isset($_POST['correo13']) && !empty($_POST['correo13']) && isset($_POST['monto']) && !empty($_POST['monto']) && isset($_POST['descripcionP']) && !empty($_POST['descripcionP']))
{
    $nombreProyecto = $_POST['nombreProyecto'];
    $numeroOrden = $_POST['numeroOrden'];
    $nombreCliente = $_POST['nombreCliente'];
    $correo = $_POST['correo13'];
    $monto = $_POST['monto'];
    $descripcionP = $_POST['descripcionP'];
    $idUsuario = $_SESSION['idUsuario'];
    $nombreProyecto = $_POST['nombreProyecto'];

    $query = "INSERT into proyectos (idUsuario, nombreProyecto, nombreCliente, numeroOrden, correo, monto) VALUES ('$idUsuario', '$nombreProyecto', '$nombreCliente', '$numeroOrden', '$correo', '$monto')";

    $query2 ="INSERT into descripcion_proyecto (idUsuario, numeroOrden, nombreProyecto, descripcionP) VALUES ('$idUsuario', '$numeroOrden', '$nombreProyecto','$descripcionP')";
    
    $consulta = mysqli_query($conexion, $query) or die (mysqli_error($conexion)); 
    $consulta2 =mysqli_query($conexion, $query2) or die (mysqli_error($conexion));
    // echo 'paso por acá también';
    if($consulta2 && $consulta) {
        echo "OK";
    } else {
        echo "error";
    }

}else {
   echo ("no se ha podido cargar la informacion por favor intentarlo + tarde");
}
?>
