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


    $sql = $conn->query("UPDATE ingles SET numero_pregunta = $id, texto = '$texto', pregunta = '$pregunta', punto_correcto = '$a', punto = '$b', punto2 = '$c', fk_materia = $mat, fk_usu1 = $doc
        WHERE numero_pregunta = $id");
    if ($sql) {
        echo '<div class="alert alert-success">Persona ACTUALIZADA correctamente</div>';
        echo '<script>
            setTimeout(function() {
                window.location.href = "http://localhost/zonas/htmls/menu/dashboard.php?mod=crud-soc";
            }, 1000); 
          </script>';

    } else {
        echo '<div class="alert alert-danger">No se pudo actualizar, revisa tu código' . mysqli_error($conn) . '</div>';
    }
    ;

}
;



?>