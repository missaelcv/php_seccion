<?php

//echo password_hash("link", PASSWORD_DEFAULT)."\n";

$usuario_nuevo = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];
$contrasena2 = $_POST['contrasena2'];

//hash de contrasena para validar 
$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

echo '<pre>';
var_dump($usuario_nuevo);
var_dump($contrasena);
var_dump($contrasena2);
echo '<pre>';


if (password_verify($contrasena2, $contrasena)) {
    echo '¡La contraseña es válida! <br>';

    include_once '../form-sesion/conexion.php';

} else {
    echo 'La contraseña no es válida.';
}
?>
