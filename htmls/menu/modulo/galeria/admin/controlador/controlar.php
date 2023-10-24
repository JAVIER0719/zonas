<?php
include('db.php'); // Asegúrate de incluir la conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Comprueba si el formulario se envió con el método POST

    if (isset($_POST['incremento'])) {
        $id = $_POST['incremento'];
        $desp = $_POST['descrip'];
        $name = $_POST['nam'];
        $admin = $_POST['admin'];

        if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
            $archivo = addslashes(file_get_contents($_FILES['archivo']['tmp_name']));

            // Consulta SQL preparada
            $query = $conn->prepare("UPDATE recursos SET descripcion = '$desp', imagen = '$archivo', nombre_imagen = '$name',  fk_docus = $admin WHERE id_recurso = $id");

            if ($query->execute()) {
                echo '<div class="alert alert-success">Recurso actualizado correctamente</div>';
                echo '<script>
                        setTimeout(function() {
                            window.location.href = "http://localhost/zonas/htmls/menu/dashboard.php?mod=Admin";
                        }, 2000); 
                        </script>';
            } else {
                echo '<div class="alert alert-danger">No se pudo actualizar, revisa tu código. Error: ' . $conn->error . '</div>';
            }
        } else {
            echo '<div class="alert alert-warning">No se seleccionó un archivo válido</div>';
        }
    } else {
        echo '<div class="alert alert-danger">No se proporcionó un ID de recurso válido en el formulario.</div>';
    }
}
?>