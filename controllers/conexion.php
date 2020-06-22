<?php

class conexion
{
    function con_fpa_asistencias()
    {
        $dbname="fpa_asistencias";
        $host="localhost";
        $port="5432";
        $user="postgres";
        $pass="Lunes35.";

        try
        {
            $DBH = new PDO("pgsql:dbname=$dbname;port=$port;host=$host;user=$user;password=$pass");
            return $DBH;
        }

        catch(PDOException $e)
        {
             echo $e->getMessage();
             echo "Error al conectarse a la base de datos.";
        }
    }
}

?>