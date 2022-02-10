<?php

$link = 'mysql:host=localhost;dbname=yt_colores';
$usuario = 'root';

try {
    
   $pdo = new PDO($link, $usuario);

   echo 'Conectado <br>';

   foreach($pdo->query('SELECT * FROM `colores`') as $fila) {
    print_r($fila);
}

} catch (PDOException $e) {
    print "Error:" . $e->getMessage() . "<br/>";
    die();
}
?>