<?php
include("db.php");
$sql = "SELECT * FROM `matematicas`;";
$resultado = $conn->query($sql);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Preguntas</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <br />
    <br />
    <br />

</head>

<body>
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>CRUD <b>Pruebas</b></h2>
                        </div>
                        <div class="col-sm-4">
                            <div class="search-box">
                                <i class="material-icons">&#xE8B6;</i>
                                <input type="text" class="form-control" placeholder="Search&hellip;">
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>texto <i class="fa fa-sort"></i></th>
                            <th>Preguntas</th>
                            <th>Respuesta A<i class="fa fa-sort"></i></th>
                            <th>Respuesta A</th>
                            <th>Respuesta A<i class="fa fa-sort"></i></th>
                            <th>Respuesta A</th>
                            <th>Materia</th>
                            <th>Quien la puso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($fila = $resultado->fetch_object()) {
                            ?>

                            <tr>
                                <td>
                                    <?= $fila->id1 ?>
                                </td>
                                <td>
                                    <?= $fila->texto3 ?>
                                </td>
                                <td>
                                    <?= $fila->pregunta3 ?>
                                </td>
                                <td>
                                    <?= $fila->a3 ?>
                                </td>
                                <td>
                                    <?= $fila->b3 ?>
                                </td>
                                <td>
                                    <?= $fila->c3 ?>
                                </td>
                                <td>
                                    <?= $fila->d3 ?>
                                </td>
                                <td>
                                    <?= $fila->fk_materia3 ?>
                                </td>
                                <td>
                                    <?= $fila->fk_usu4 ?>
                                </td>
                                <td>
                                    <a href="#" class="view" title="View" data-toggle="tooltip"><i
                                            class="material-icons">&#xE417;</i></a>
                                    <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i
                                            class="material-icons">&#xE254;</i></a>
                                    <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i
                                            class="material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ;
                        ?>
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <center>
        <p>&copy; Zona del saber
            <?php echo date("Y"); ?>
        </p </center>
        <script src="./main.js"></script>
</body>

</html>