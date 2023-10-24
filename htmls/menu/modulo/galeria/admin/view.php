<?php

include('db.php');
$id = $_GET['id_recurso'];
$imagen = $conn->query("SELECT * FROM recursos WHERE id_recurso=$id");


?>
<!doctype html>
<html lang="es">

<head>
    <title>actualizar</title>
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
            <h1>Actualizar</h1>
        </header>
        <main>

            <form method="post" enctype="multipart/form-data">
                <?php
                include('controlador/controlar.php');
                while ($actualizar = $imagen->fetch_object()) {
                    ?>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" name="descrip" class="form-control" placeholder="Descripcion de la imagen"
                                value="<?= $actualizar->descripcion ?>">
                            <br />
                            <div class="form-group">
                                <label for="archivo" id="archivo-label" class="btn btn-primary">Seleccionar Archivo</label>
                                <input type="file" name="archivo" class="form-control" id="archivo" style="display: none;">
                                <span id="nombre-archivo">No se ha seleccionado un archivo.</span>
                            </div>
                        </div>
                        <div class="col">
                            <input type="text" name="nam" class="form-control" placeholder="Nombre turistico"
                                value="<?= $actualizar->nombre_imagen ?>" />
                            <br />
                            <input type="number" name="admin" class="form-control" placeholder="¿Quien la sube?"
                                value="<?= $actualizar->fk_docus ?>">
                        </div>
                    </div>
                    <hr />
                    <input type="hidden" name="incremento" class="form-control" value="<?= $id ?>"
                        placeholder="¿quien la sube?">
                    <?php
                }
                ;
                ?>
                <button class="submit_button" type="submit" name="enviar" id="button">actualizar</button>
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