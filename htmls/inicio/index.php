<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['enviar'])) {
    $doc = $_POST['doc'];
    $passw = $_POST['clave1'];
    $encrip = md5($passw);

    // Conexión a la base de datos (Asegúrate de que esta parte sea correcta)
    include('db.php');

    // Consulta SQL para buscar el usuario
    $consulta = mysqli_query($conn, "SELECT * FROM usuario WHERE doc='$doc' AND clave='$encrip'");
    $resultado = mysqli_num_rows($consulta);

    if ($resultado == 1) {
        while ($fila = mysqli_fetch_array($consulta)) {
            $_SESSION['doc'] = $fila['doc'];
            $_SESSION['clave'] = $fila['clave'];
            echo '<script>
        setTimeout(function() {
            window.location.href = "../menu/dashboard.php";
        }, 1000); 
      </script>';
            exit();
        }
    } else {
        // Si las credenciales no coinciden, muestra un mensaje de error
        echo '<script>
            setTimeout(function() {
                swal({
                    title: "Sus datos no coincide",
                    text: "Verifique y mande de nuevo",
                    icon: "warning",
                });
            }, 1000);
        </script>';
        $mensajeError = "Sus datos no coinciden";
    }
}
?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <title>Inicio De Sesion</title>
</head>

<body class="fondo">
    <div class="container">
        <div class="card">
            <form action="index.php" method="post" onsubmit="return mostrarAlertaAntesDeEnviar()">

                <div class="main_signin active">
                    <div class="top-div">
                        <h2>Bienvenido de nuevo</h2>
                        <p>Inicia sesión para continuar</p>
                    </div>
                    <div class="sign_in">
                        <h3>Iniciar</h3>
                    </div>

                    <div class="input-text">
                        <input name="doc" type="number" placeholder="Ingresa su numero de documento" require>
                    </div>
                    <div class="input-text">
                        <input type="password" name="clave1" placeholder="Ingresa clave" require>
                    </div>
                    <div class="button sign_button">
                        <button type="submit" name="enviar" class="signin_submit_button">Iniciar</button>
                        <div class="boton2">
                            <a href="../registro/index.php" class="account2">
                                Registrarse</a>
                        </div>
                        <div class="boton8">
                            <a href="../recuperar/index.php" class="account3">
                                Olvidó su contraseña?</a>
                        </div>
                    </div>
                </div>

                <div class="right-side">
                    <div class="cover-image">
                        <img class="right_img " src="../img/fondo2.png"></img>
                    </div>
                </div>

            </form>
            <?php if (isset($mensajeError)) { ?>
                <div class="text_alert">
                    <?php echo $mensajeError; ?>
                </div>
            <?php } ?>

            <script src="../js/app.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
            <script>
                function mostrarAlertaAntesDeEnviar() {
                    // Muestra la alerta
                    swal({
                        title: "Registro exitoso",
                        text: "Has hecho clic en el botón!",
                        icon: "success",
                        buttons: {
                            ok: "OK",
                        },
                    }).then(function (value) {
                        if (value === "ok") {

                            setTimeout(function () {
                                document.querySelector('form').submit();
                            }, 1000);
                        }
                    });


                    return true;
                }
            </script>

        </div>
    </div>
</body>

</html>