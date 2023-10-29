<?php
include('db.php');
if (empty($_POST['enviar'])) {
    $id = $_POST["id"];

    $texto = $_POST["text"];
    $pregunta = $_POST["pregun"];
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $d = $_POST["d"];
    $mat = $_POST["mat"];
    $doc = $_POST["doc"];


    $sql = $conn->query("UPDATE matematicas SET id1 = $id, texto3 = '$texto', pregunta3 = '$pregunta', a3 = '$a', b3 = '$b', c3 = '$c', d3 = '$d', fk_materia3 = $mat, fk_usu4 = $doc
        WHERE id1 = $id");
    if ($sql) {
        echo '<div class="alert alert-success">Persona ACTUALIZADA correctamente</div>';
        echo '<script>
            setTimeout(function() {
                window.location.href = "http://localhost/zonas/htmls/menu/dashboard.php?mod=crud-mat";
            }, 1000); 
          </script>';

    } else {
        echo '<div class="alert alert-danger">No se pudo actualizar, revisa tu código' . mysqli_error($conn) . '</div>';
    }

} else {
    echo '<div class="alert alert-warning">Llena todos los datos</div>';
}
;



?>