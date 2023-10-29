<?php
$host = "localhost";
$usuario = "root";
$passwor = "0719";
$db = "zonadelsaber";

//crear conexion con nuestra base de datos
$conn = mysqli_connect($host, $usuario, $passwor, $db);

// Verificar la conexión
if (!$conn) {
    die("error de conexion: " . mysqli_connect_error());
}
?>