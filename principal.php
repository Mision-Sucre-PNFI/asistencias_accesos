<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <h1>BIENVENIDO <?php echo $_SESSION['nombre_usuario'] ?> A LA PAGINA PRINCIPAL</h1>
</body>
</html>