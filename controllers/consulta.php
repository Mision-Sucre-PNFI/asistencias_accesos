<?php

include("conexion.php");

class consulta
{

    function contar_registros($query)
    {
        $conexiones = new conexion();
        $DBH = $conexiones->con_fpa_asistencias();
        $STH = $DBH->query($query);
        while($campo = $STH->fetch())
            {
                $cantidad = $campo['count'];
            }
        return $cantidad;
        $STH = NULL;
        $DBH = NULL;
    }

    function validar_usuario($nombre_usuario)
    {
        $usuario_valido = $this->contar_registros("SELECT count(*) FROM acceso WHERE nombre_usuario = '$nombre_usuario' ");
        return $usuario_valido;
    }

    function validad_clave($nombre_usuario, $clave)
    {
        $clave_valida = $this->contar_registros("SELECT count(*) FROM acceso WHERE nombre_usuario = '$nombre_usuario' AND clave = '$clave' ");
        return $clave_valida;
    }
}

?>