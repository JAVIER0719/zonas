<?php
$nota = $_POST['nota'];
$crono = $_POST['tiempo'];
$doc = $_POST['doc'];
$id = $_POST['id'];

include('bd.php');


$sql = "INSERT INTO `resultado_usuario` (`fk_usodoc`, `nota`, `tiempo_en_prueba`, `id_resultado`, `fk_mat`) VALUES (?, ?, ?, NULL, $id)";


$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    echo "Error: " . mysqli_error($conn);
    exit;
}


mysqli_stmt_bind_param($stmt, "iss", $doc, $nota, $crono);


if (mysqli_stmt_execute($stmt)) {
    echo "Los datos se han guardado correctamente en la base de datos.";
    header('location:http://localhost/zonas/htmls/menu/dashboard.php?mod=pruebas');

} else {
    echo "Error: " . mysqli_error($conn);
}


mysqli_stmt_close($stmt);
mysqli_close($conn);
?>