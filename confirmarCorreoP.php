<?php
require_once('php/conexion.php');
if (isset($_POST['correo1']) && !empty($_POST['correo1'])){


$correo1 = $_POST['correo1'];


$correosRegistrados = mysqli_query($conexion,"SELECT * from registro  where correo='$correo1'") or die(mysqli_error($conexion));


$numUsuarios12 = mysqli_num_rows($correosRegistrados);

if( $numUsuarios12 > 0) {

    echo "NO";

}}else {

    echo "no se ha podido validar al usuario";

}

// $cantidadUsuarios = mysqli_num_rows($usuariosRegistrados);

// $correosRegistrados = mysqli_query($conexion, "SELECT id, correo from registro where correo ='$validarRC'");
// $cantidadCorreos = mysqli_num_rows($correosRegistrados);
?>