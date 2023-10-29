<?php
include('db.php');

$id = $_GET['id'];

$query = $conn->query("SELECT * FROM matematicas WHERE id1=$id");


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
                    <form method="post" action="controlador/controlar.php">
                        <h1>Modificar<b>materia de matematicas</b></h1>
                        <input type="hidden" name="id" class="form-control" value="<?= $_GET['id'] ?>">
                        <?php
                        while ($dato = $query->fetch_object()) { ?>

                            <div class="form-group">
                                <label>texto</label>
                                <input type="text" name="text" class="form-control" value="<?= $dato->texto3 ?>">
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>pregunta</label>
                                    <input type="text" name="pregun" class="form-control" value="<?= $dato->pregunta3 ?>">
                                </div>
                                <div class="form-group">
                                    <label>Opcion A</label>
                                    <input type="text" name="a" class="form-control" value="<?= $dato->a3 ?>">
                                </div>
                                <div class="form-group">
                                    <label>Opcion B</label>
                                    <input type="text" name="b" class="form-control" value="<?= $dato->b3 ?>">
                                </div>
                                <div class="form-group">
                                    <label>Opcion C</label>
                                    <input type="text" name="c" class="form-control" value="<?= $dato->c3 ?>">
                                </div>
                                <div class="form-group">
                                    <label>Opcion D</label>
                                    <input type="text" name="d" class="form-control" value="<?= $dato->d3 ?>">
                                </div>
                                <div class="form-group">
                                    <label>¿De que materia pertenece?</label>
                                    <input type="number" name="mat" class="form-control" value="<?= $dato->fk_materia3 ?>">
                                </div>
                                <div class="form-group">
                                    <label>¿Quien lo monta?</label>
                                    <input type="number" name="doc" class="form-control" value="<?= $dato->fk_usu4 ?>">
                                </div>

                            <?php }

                        ;
                        ?>
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