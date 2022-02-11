<?php

include_once '../yt_colores/conexion.php';

$usuario_nuevo = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];
$contrasena2 = $_POST['contrasena2'];

$sql = 'SELECT * FROM usuarios WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_nuevo));
$resultado = $sentencia->fetch();

var_dump($resultado);

if($resultado){
    echo 'Existe este Usuario';
    die();
}

//hash de contrasena para validar 
$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

echo '<pre>';
var_dump($usuario_nuevo);
var_dump($contrasena);
var_dump($contrasena2);
echo '<pre>';

if (password_verify($contrasena2, $contrasena)) {
    echo '¡La contraseña es válida! <br>';

   $sql_agregar= 'INSERT INTO usuarios (nombre, contrasena) VALUE (?, ?)';
   $sentencia_agregar = $pdo->prepare($sql_agregar);

   if ($sentencia_agregar->execute(array($usuario_nuevo,$contrasena)) ){
            echo 'Agregado <br>';
   }else {
       echo 'Error<br>';
   }

   $sentencia_agregar = null;
   $pdo = null;  
   //header('location:index.php');

} else {
    echo 'La contraseña no es válida.';
}
?>
