<?php
$cadena_conexion = 'mysql:dbname=grupo_2;host=132.226.219.27';
$usuario = 'grupo_2';
$clave = "afa_7354";
$db = new PDO($cadena_conexion, $usuario, $clave);

if (mysqli_connect_error()) {
    die('No se puede conectar a la base de datos, por el motivo: ' . mysqli_connect_error());
} else {
    $sql = "SELECT * FROM libros";
    $datos = $db->query($sql);
}
