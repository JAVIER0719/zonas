<?php
include('db.php');

$id = $_GET['id'];

$sql = $conn->query("SELECT * FROM usuario WHERE doc=$id");


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
                    <form method="post">
                        <h1>Modificar usuario</h1>
                        <input type="hidden" name="id" class="form-control" value="<?= $_GET['id'] ?>">
                        <?php
                        include('controlador/controlar.php');
                        while ($dato = $sql->fetch_object()) { ?>

                            <div class="form-group">
                                <label>Correo</label>
                                <input type="email" name="email" class="form-control" value="<?= $dato->correo ?>">
                            </div>
                            <div class="form-group">
                                <label>Numero de documento</label>
                                <input type="number" name="doc" class="form-control" value="<?= $dato->doc ?>">
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Primer nombre</label>
                                    <input type="text" name="nam" class="form-control" value="<?= $dato->primer_nombre ?>">
                                </div>
                                <div class="form-group">
                                    <label>segundo_nombre nombre</label>
                                    <input type="text" name="nam2" class="form-control"
                                        value="<?= $dato->segundo_nombre ?>">
                                </div>
                                <div class="form-group">
                                    <label>Primer apellido</label>
                                    <input type="text" name="ape" class="form-control"
                                        value="<?= $dato->primer_apellido ?>">
                                </div>
                                <div class="form-group">
                                    <label>Segundo apellido</label>
                                    <input type="text" name="ape2" class="form-control"
                                        value="<?= $dato->segundo_apellido ?>">
                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="password" name="pass" class="form-control" value="<?= $dato->clave ?>">
                                </div>
                                <div class="form-group">
                                    <label>telefono</label>
                                    <input type="number" name="cel" class="form-control" value="<?= $dato->cel ?>">
                                </div>
                                <div class="input-text" require>
                                    <select id="Grado" name="tipo">

                                        <option values="">
                                            <?= $dato->tipo_docu ?>
                                        </option>
                                        <option value="T.I">Tarjeta de identidad</option>
                                        <option value="C.C">Cedula de ciudadania</option>
                                        <option values="C.E">Cedula de extrangeria</option>
                                    </select>
                                </div>
                                <div class="input-text" require>
                                    <select id="Grado" name="grado">
                                        <option>
                                            <?= $dato->grado ?>
                                        </option>
                                        <option>Decimo</option>
                                        <option>Undecimo</option>
                                    </select>
                                </div>
                                <div class="input-text">
                                    <select name="cate">

                                        <option value="">
                                            <?= $dato->fk_rol ?>
                                        </option>
                                        <option value="10">Estudiante</option>
                                        <option value="12">Administrador</option>
                                    </select>
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