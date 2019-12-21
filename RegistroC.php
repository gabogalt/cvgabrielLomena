<?php

require_once('php/conexion.php'); 
if( isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['usuario']) && !empty($_POST['usuario']) &&  isset($_POST['apellido']) && !empty($_POST['apellido']) &&  isset($_POST['correo']) && !empty($_POST['correo']) &&  isset($_POST['repetirCorreo'])    && !empty($_POST['repetirCorreo']) &&  isset($_POST['clave']) && !empty($_POST['clave']) && isset($_POST['repetirClave']) && !empty($_POST['repetirClave'])  )
    {
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $usuario=$_POST['usuario'];
        $correo=$_POST['correo'];
        $repetirCorreo=$_POST['repetirCorreo'];
        $clave=md5($_POST['clave']);
        $repetirClave=md5($_POST['repetirClave']);
        

                   
                    if ($clave == $repetirClave and $correo == $repetirCorreo)
                        {
                            $registroUsuario=mysqli_query($conexion,"INSERT INTO registro (nombre , apellido, correo) VALUES ('$nombre', '$apellido', '$correo')") or die (mysqli_error($conexion));

                            $usuario=mysqli_query($conexion, "INSERT INTO usuarios ( usuario, password) VALUES ( '$usuario', '$clave')") or die (mysqli_error($conexion));

                                    header('Location:login.php');
                                }else
                                    {
                                        echo "No se ha podido registrar al usuario, intente mas tarde.";
                                    }
    }else
        {
            echo "complete todos los datos solicitados"; 
        }


?>

