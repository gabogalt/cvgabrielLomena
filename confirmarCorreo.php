<?php

require_once('php/conexion.php');
if (isset($_POST['correo']) && !empty($_POST['correo'])){

$correo = $_POST['correo'];

$correosRegistrados = mysqli_query($conexion, "SELECT * from registro where correo ='$correo'");
 $cantidadCorreos = mysqli_num_rows($correosRegistrados);

if( $cantidadCorreos > 0) {

    echo "NO";

}}else {

    echo "no se ha podido validar al usuario";

}


 

?>