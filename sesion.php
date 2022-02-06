<?php

session_start();
$login = 'Missael';

$_SESSION['admin']  = $login;

if (isset($_SESSION['admin']) ){
    echo 'Sesion iniciada';
}

echo '<br>';
var_dump($_SESSION);


?>
