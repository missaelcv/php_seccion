<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Sesion</title>
</head>
<body>
    <a href="sesion.php">Iniciar Seccion</a>
    <a href="protegido.php">Contenido Protegido</a>
    <h2>Bienvenido: <?php echo isset($_SESSION['admin']) ? $_SESSION['admin'] :'Invitado' ?> </h2>
</body>
</html>