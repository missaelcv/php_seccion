<?php

//echo password_hash("missael", PASSWORD_DEFAULT)."\n";

$usuario_nuevo = $_POST['nombre_usuario'];
$contrasena = $_POST['constrasena'];
$contrasena2 = $_POST['constrasena2'];

//hash de contrasena para validar 
$contrasena = password_hash("missael", PASSWORD_DEFAULT)."\n";

echo '<pre>';
var_dump($usuario_nuevo);
var_dump($contrasena);
var_dump($contrasena2);
echo '<pre>';


if (password_verify($constrasena2, $constrasena)) {
    echo '¡La contraseña es válida!';
} else {
    echo 'La contraseña no es válida.';
}
?>
