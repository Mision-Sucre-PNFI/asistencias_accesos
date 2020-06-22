<?php

?>

<!DOCTYPE html>
<html lang="es-ve">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Acceso</title>
</head>
<body>
    <form action="controllers/validar.php" method="post">

        <label for="">Ingrese su usuario: </label>
        <input type="text" name="nombre_usuario" id="nombre_usuario" required>

        <br>
        <br>

        <label for="">Ingrese su clave: </label>
        <input type="password" name="clave" id="clave" required>

        <br>
        <br>

        <button type="submit">Acceder</button>

    </form>
</body>
</html>