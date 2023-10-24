<?php

include('db.php');

?>
<!doctype html>
<html lang="es">

<head>
    <title>Agregar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <center>
        <header>
            <h1>Agregar</h1>
        </header>
        <main>

            <form method="post" enctype="multipart/form-data" action="agg.php">
                <?php
                include('db.php');

                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['enviar'])) {
                    // Recupera los datos del formulario
                    $name = $_POST["nam"];
                    $descrip = $_POST["descrip"];
                    $admin = $_POST["admin"];
                    $archivo = addslashes(file_get_contents($_FILES['archivo']['tmp_name']));

                    $sql = "INSERT INTO recursos (descripcion, imagen, nombre_imagen, fk_docus)
                     VALUES ('$descrip', '$archivo', '$name', '$admin')";

                    // Ejecuta la consulta SQL
                    if (mysqli_query($conn, $sql)) {
                        echo '<script>
        setTimeout(function() {
            window.location.href = "http://localhost/zonas/htmls/menu/dashboard.php?mod=Admin";
        }, 1000); 
      </script>';

                        exit();
                    } else {
                        echo "Error: " . mysqli_error($conn);
                        echo '<script>
        setTimeout(function() {
            swal({
                title: "Oops, hubo un error en el sistema. Por favor, permítanos corregirlo.",
                text: "Porfavor llene los campos correspondidos",
                icon: "warning",
            });
        }, 1000);
    </script>';
                    }
                }
                ?>
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="descrip" class="form-control" placeholder="Descripcion de la imagen" ">
                            <br />
                            <div class=" form-group">
                        <label for="archivo" id="archivo-label" class="btn btn-primary">Seleccionar Archivo</label>
                        <input type="file" name="archivo" class="form-control">
                        <span id="nombre-archivo">No se ha seleccionado un archivo.</span>
                    </div>
                </div>
                <div class="col">
                    <input type="text" name="nam" class="form-control" placeholder="Nombre turistico" />
                    <br />
                    <input type="number" name="admin" class="form-control" placeholder="¿Quien la sube?">
                </div>
                </div>
                <hr />

                <button class="submit_button" type="submit" name="enviar" id="button">Agregar</button>
            </form>
    </center>
    <script>
        document.getElementById('archivo').addEventListener('change', function () {
            var nombreArchivo = this.files[0].name;
            alert('Archivo seleccionado: ' + nombreArchivo);
            document.getElementById('nombre-archivo').textContent = 'Archivo seleccionado: ' + nombreArchivo;
        });
    </script>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>