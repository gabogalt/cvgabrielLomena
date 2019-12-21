<?php
session_start();


if (isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])){
    // echo 'hola';
require_once('php/conexion.php');
$idUsuario = $_SESSION['idUsuario'];
$tarea = $_POST['tarea'];


$consulta ="INSERT into lista_tareas (idUsuario, tareas) VALUES ('$idUsuario', '$tarea')";
$query = mysqli_query($conexion, $consulta);


// echo 'cargado en la tablas';

header('Location:index.php');



}else {
    
    header('Location:login.php');

}


?>