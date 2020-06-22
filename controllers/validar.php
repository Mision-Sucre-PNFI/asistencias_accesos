<?php

include("consulta.php");

session_start();

$nombre_usuario = $_POST['nombre_usuario'];
$clave = $_POST['clave'];

$consultas = new consulta;

// Reviso si el usuario existe
$usuario_existe = $consultas->validar_usuario($nombre_usuario);

if ($usuario_existe!="0")
{
    // El usuario existe, valido la contraseña
    echo "El usuario existe";
    $clave_valida = $consultas->validad_clave($nombre_usuario, $clave);

    if ($clave_valida!="0")
    {
        //La clave es correcta, envio al usuario a la pagina de la app
        header("location:../principal.php");
        $_SESSION['nombre_usuario'] = strtoupper($nombre_usuario);
    }
    else
    {
        header("location:../clave_invalida.html");
    }

}
else
{
    header("location:../usuario_invalido.html");

}



?>