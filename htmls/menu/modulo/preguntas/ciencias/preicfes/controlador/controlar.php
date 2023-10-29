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


    $sql = $conn->query("UPDATE ciencias_naturalez SET numero_pregunta1 = $id, texto1 = '$texto', pregunta1 = '$pregunta', a = '$a', b = '$b', c = '$c', d = '$d', fk_mat = $mat, fk_usu2 = $doc
        WHERE numero_pregunta1 = $id");
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