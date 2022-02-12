<?php

include_once '../yt_colores/conexion.php';

$usuario_login = $_POST['nombre_usuario'];
$contrasena_login = $_POST['contrasena'];

echo '<pre>';
var_dump($usuario_login);
var_dump($contrasena_login);
echo '<pre>';

//Verificar si Usuario Existe...
$sql = 'SELECT * FROM usuarios WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($$usuario_login));
$resultado = $sentencia->fetch();

echo '<pre>';
var_dump($resultado);
echo '<pre>';