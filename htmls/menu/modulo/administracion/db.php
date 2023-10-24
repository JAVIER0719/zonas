<?php
$host = "localhost";
$usuario = "root";
$passwwor = "0719";
$db = "zonadelsaber";

//crear conexion con nuestra base de datos
$conn = mysqli_connect($host, $usuario, $passwwor, $db);
$conn->set_charset("utf8");
// Verificar la conexión
if (!$conn) {
    die("error de conexion: " . mysqli_connect_error());
}

?>