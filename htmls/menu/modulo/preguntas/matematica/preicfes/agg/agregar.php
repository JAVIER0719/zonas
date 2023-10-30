<?php
include('db.php');




?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <center>
        <div class="col-4">
            <div class="row-5">

                <main>
                    <form method="post" action="agregar.php" enctype="multipart/form-data">
                        <h1>Agregar<b> materia de matematicas</b></h1>
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['enviar'])) {
                            // Recupera los datos del formulario
                        
                            $texto = $_POST["text"];
                            $archivo = addslashes(file_get_contents($_FILES['archivo']['tmp_name']));
                            $pregunta = $_POST["pregun"];
                            $a = $_POST["a"];
                            $b = $_POST["b"];
                            $c = $_POST["c"];
                            $d = $_POST["d"];
                            $mat = $_POST["mat"];
                            $doc = $_POST["doc"];


                            $sql = "INSERT INTO `matematicas` (`id1`,`img`,`texto3`, `pregunta3`, `a3`, `b3`, `c3`, `d3`, `fk_materia3`, `fk_usu4`)
                             VALUES (NULL,'$archivo','$texto','$pregunta','$a','$b','$c','$d',$mat,$doc)";

                            // Ejecuta la consulta SQL
                            if (mysqli_query($conn, $sql)) {
                                echo '<script>
                            setTimeout(function() {
                                window.location.href = "http://localhost/zonas/htmls/menu/dashboard.php?mod=crud-mat";
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
                        ;
                        ?>



                        <br />
                        <div class=" form-group">
                            <label for="archivo" id="archivo-label" class="btn btn-primary">Seleccionar Archivo</label>
                            <input type="file" name="archivo" class="form-control">
                            <span id="nombre-archivo">No se ha seleccionado un archivo.</span>
                        </div>
                        <br />
                        <div class="form-group">
                            <label>texto</label>
                            <input type="text" name="text" class="form-control" value="">
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>pregunta</label>
                                <input type="text" name="pregun" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label>Opcion A</label>
                                <input type="text" name="a" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label>Opcion B</label>
                                <input type="text" name="b" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label>Opcion C</label>
                                <input type="text" name="c" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label>Opcion D</label>
                                <input type="text" name="d" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label>¿De que materia pertenece?</label>
                                <input type="number" name="mat" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label>¿Quien lo monta?</label>
                                <input type="number" name="doc" class="form-control" value="">
                            </div>


                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <button type="submit" name="enviar">actualizar</button>
                            </div>
                    </form>
                </main>
            </div>
        </div>
    </center>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>