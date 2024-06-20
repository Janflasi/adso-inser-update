<?php

include("usuario.php");

$documento = $_GET['documento'];
$nombre = $_GET['nombre'];
$password = $_GET['password'];
$fecha_nacimeinto = $_GET['fecha_nacimeinto'];

Nombre_usuario::usuario($documento, $nombre, $password, $fecha_nacimeinto);

?>
