<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Sesion.php</title>
</head>
<body>
    <h3>Registro Usuario</h3>
    <form action="agregar_usuario.php" method="POST">
        <input type="text" name="nombre_usuario" placeholder="Ingrese Usuario">
        <input type="text" name="contrasena" placeholder="Ingrese Contrasena">
        <input type="text" name="contrasena2" placeholder="Ingrese nuevamente pass">
        <button type="submit">Guardar</button>
    </form>

    <h3>Login</h3>
    <form action="login.php" method="POST">
        <input type="text" name="nombre_usuario" placeholder="Ingrese Usuario">
        <input type="text" name="contrasena" placeholder="Ingrese Contrasena">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>