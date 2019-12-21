<?php
require_once('php/conexion.php');
if (isset($_POST['usuario12']) && !empty($_POST['usuario12'])){


$usuario12 = $_POST['usuario12'];


$usuariosRegistrados12 = mysqli_query($conexion,"SELECT * from usuarios  where usuario='$usuario12'") or die(mysqli_error($conexion));


$numUsuarios12 = mysqli_num_rows($usuariosRegistrados12);

if( $numUsuarios12 > 0) {

    echo "NO";

}}else {

    echo "no se ha podido validar al usuario";

}

// $cantidadUsuarios = mysqli_num_rows($usuariosRegistrados);

// $correosRegistrados = mysqli_query($conexion, "SELECT id, correo from registro where correo ='$validarRC'");
// $cantidadCorreos = mysqli_num_rows($correosRegistrados);
?>