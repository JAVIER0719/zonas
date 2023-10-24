<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['enviar'])) {
    // Recupera los datos del formulario
    $nam1 = $_POST["nam1"];
    $nam2 = $_POST["nam2"];
    $ape1 = $_POST["ape1"];
    $ape2 = $_POST["ape2"];
    $cate = $_POST["cate"];
    $phone = $_POST["phone"];
    $tipo = $_POST["tipo"];
    $grado = $_POST["grad"];
    $email = $_POST["email"];
    $pass = $_POST["clave1"];
    $doc = $_POST["doc"];

    $encrip = md5($pass);

    $sql = "INSERT INTO usuario (doc, correo, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, clave, cel, tipo_docu, grado, fk_rol)
            VALUES ('$doc', '$email', '$nam1', '$nam2', '$ape1', '$ape2', '$encrip', '$phone', '$tipo', '$grado', '$cate')";

    // Ejecuta la consulta SQL
    if (mysqli_query($conn, $sql)) {
        echo '<script>
        setTimeout(function() {
            window.location.href = "../inicio/index.php";
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
<html>

<head>
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <meta http-equiv="content-type" content="text/html" ; charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<body>

    <div class="container">

        <div class="card">

            <form action="index.php" method="post" onsubmit="return mostrarAlertaAntesDeEnviar()">

                <div class="left-side">

                    <div id="for" class="signup-form s_form">
                        <div class="logo">
                        </div>
                        <ul class="steps">
                            <li class="li-active"></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <div class="main active" id="form1">
                            <div class="top-div">
                                <p>Datos básicos</p>
                            </div>
                            <div class="input-text">
                                <input name="nam1" type="text" placeholder="Primer nombre" id="user_name" require>
                            </div>
                            <div class="input-text">
                                <input id="nom2" name="nam2" type="text" placeholder="Segundo nombre">
                            </div>
                            <div class="input-text">
                                <input id="apel" name="ape1" type="text" placeholder="Primer apellido" require>
                            </div>
                            <div class="input-text">
                                <input id="apel2" name="ape2" type="text" placeholder="Segundo apllido">
                            </div>
                            <div class="input-text">
                                <select name="cate" require>
                                    <option value="10">Estudiante</option>
                                    <option value="12">Administrador</option>
                                </select>
                            </div>

                            <div class="buttons">
                                <button type="button" onclick="navegar1()" name="btn_ope"
                                    class="next_button">SIGUIENTE</button>
                            </div>
                        </div>

                        <div class="main" id="form2">
                            <div class="top-div">
                                <p>Rellene los seguientes datos</p>
                            </div>
                            <div class="input-text">
                                <input id="cell" name="phone" type="number" placeholder="Numero de telefono" require>
                            </div>
                            <div class="input-text" require>
                                <select id="tipd" name="tipo" require>
                                    <option>Tipo de identificación </option>
                                    <option value="TI">Tarjeta de identidad</option>
                                    <option value="CC">Cédula de ciudadanía</option>
                                    <option value="CE">Cédula de extranjero</option>
                                </select>
                            </div>
                            <div class="input-text">
                                <input id="ndocu" type="number" name="doc" placeholder="Ingrese su numero de documento"
                                    require>
                            </div>
                            <div class="input-text" require>
                                <select id="Grado" name="grad" require>
                                    <option>Grado</option>
                                    <option>Décimo</option>
                                    <option>Undécimo</option>
                                </select>
                            </div>
                            <div class="buttons">
                                <button type="button" class="previous_button" onclick="navegar2()">ANTERIOR</button>
                                <button type="button" class="next_button" onclick="navegar3()">SIGUIENTE </button>

                            </div>
                        </div>

                        <div class="main " id="form3">
                            <div class="top-div">
                                <p>Rellene los seguientes datos</p>
                            </div>
                            <div class="input-text">
                                <input id="corre" type="text" name="email"
                                    placeholder="Ingrese su dirección de correo electrónico" require>
                            </div>

                            <div class="input-text">
                                <input id="cont" type="password" name="clave1" placeholder="Confirmar contraseña"
                                    require>
                            </div>
                            <div class="buttons final_button">
                                <button type="button" onclick="navegar3()" class="previous_button">ANTERIOR</button>
                                <button type="submit" name="enviar" id="btn1" class="submit_button">SIGUIENTE</button>
                            </div>

                        </div>
                        <div class=" boton1">
                            <a href="../inicio/index.php" class="account ">Ya tienes una cuenta?</a>
                        </div>

                    </div>

                </div>


                <div class="right-side">
                    <div class="cover-image">
                        <img class="right_img " src="../img/fondo235.png"></img>
                    </div>
                </div>
        </div>

        </form>
        <script src="../js/app.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                        }, 5000);
                    }
                });


                return true;
            }
        </script>


    </div>
    </div>


</body>

</html>