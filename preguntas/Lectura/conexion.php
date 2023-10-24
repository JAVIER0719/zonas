<?php

$nota = $_POST['nota'];
$crono = $_POST['tiempo'];

include "db.php";

// Prepara la consulta INSERT con un marcador de posición (?)
$sql = "INSERT INTO `nueva` (`cronometro`, `nota`) VALUES ('$crono', ?)";

// Prepara la sentencia
$stmt = mysqli_prepare($conn, $sql);

// Vincula el valor de la nota al marcador de posición (?)

mysqli_stmt_bind_param($stmt, "i", $nota);

// Ejecuta la consulta
if (mysqli_stmt_execute($stmt)) {
    echo "Los datos se han guardado correctamente en la base de datos.";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Cierra la sentencia y la conexión
mysqli_stmt_close($stmt);
mysqli_close($conn);

?>