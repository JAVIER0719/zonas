<?php
session_start();

if (isset($_POST['respuesta'])) {
    $respuesta = $_POST['respuesta'];

    if ($respuesta === 'Si') {
        session_destroy();
        header("location:../inicio/index.php");
        exit();
    } else if ($respuesta === 'No') {
        header("location:dashboard.php");
        exit();
    }
}
?>

<html>

<head>
    <title>Cerrar Sesion</title>
    <style>
        .salir {
            height: 40%;
            text-align: center;
            margin-top: 17%;
            border-color: grey;
            border-radius: 4px;
        }

        .button {
            cursor: pointer;
            padding-left: 2%;
        }
    </style>
</head>

<body>
    <div class="salir">
        <h1>¿Estás seguro de que deseas cerrar la sesión?</h1>
        <form action="salir.php" method="post">
            <button class="button" type="submit" name="respuesta" value="Si">Si</button>
            |
            <button class="button" type="submit" name="respuesta" value="No">No</button>
        </form>
    </div>
</body>

</html>