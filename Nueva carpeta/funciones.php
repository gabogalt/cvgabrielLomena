<?php
$conexion= mysqli_connect('localhost','root','','proyecto pwm_verano') or die mysqli_error('problemas al conectar con la base de datos');
$verificacionR=( isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['apellido']) && !empty($_POST['apellido']) & isset($_POST['fecha']) && !empty($_POST['fecha']) && isset($_POST['sexo']) && !empty($_POST['sexo']) && isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['correo']) && !empty($_POST['correo']) && isset($_POST['repetirCorreo']) && !empty($_POST['repetirCorreo']) && isset($_POST['password']) && !empty($_POST['repetirPassword']));



?>