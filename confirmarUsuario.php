<?php
require_once('php/conexion.php');
if (isset($_POST['usuario']) && !empty($_POST['usuario'])){

$usuario = $_POST['usuario'];

$usuariosRegistrados = mysqli_query($conexion,"SELECT * from usuarios  where usuario='$usuario'") or die(mysqli_error($conexion));



$numUsuarios = mysqli_num_rows($usuariosRegistrados);


if( $numUsuarios > 0) {

    echo "NO";

}}else {

    echo "no se ha podido validar al usuario";

}

// $cantidadUsuarios = mysqli_num_rows($usuariosRegistrados);

// $correosRegistrados = mysqli_query($conexion, "SELECT id, correo from registro where correo ='$validarRC'");
// $cantidadCorreos = mysqli_num_rows($correosRegistrados);
?>