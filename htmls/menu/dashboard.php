<?php
session_start();
include('db.php');

if (isset($_SESSION['doc'])) {
  $usuario_id = $_SESSION['doc'];

  $query = "SELECT doc, correo, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, clave, cel, tipo_docu, grado, fk_rol FROM usuario WHERE doc = '$usuario_id'";

  $resultado = mysqli_query($conn, $query);

  if ($resultado) {
    $fila = mysqli_fetch_assoc($resultado);

    if ($fila) {
      $doc = $fila['doc'];
      $correo = $fila['correo'];
      $primerNombre = $fila['primer_nombre'];
      $segundoNombre = $fila['segundo_nombre'];
      $primerApellido = $fila['primer_apellido'];
      $segundoApellido = $fila['segundo_apellido'];
      $clave = $fila['clave'];
      $cel = $fila['cel'];
      $tipoDocu = $fila['tipo_docu'];
      $grado = $fila['grado'];
      $fkRol = $fila['fk_rol'];

      mysqli_close($conn);
    } else {
      echo "No se encontraron datos para el usuario actual.";
      header("location:./inicio/index.php");
    }
  } else {
    echo "Error en la consulta: " . mysqli_error($conn);
  }
} else {
  echo "El usuario no ha iniciado sesión.";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zona del saber</title>
  <link rel="stylesheet" type="text/css" href="estilos.css" />
  <link rel="stylesheet" type="text/css" href="/zonas/htmls/css/estimenu.css" />

  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css" />
  <link rel="stylesheet" type="text/css" href="../menu/modulo/preguntas/Lectura/css/estilos.css" />
  <link rel="stylesheet" type="text/css" href="../menu/modulo/preguntas/matematica/css/estilos.css" />
</head>


<header>
  <div class="icon__menu">
    <i class="la fas fa-bars" id="btn_open"></i>
    <img src="/zonas/htmls/img/LOGO1.png" alt="">
    <div class="option">


    </div>

</header>

<body id="body">

  <div class="menu__side" id="menu_side">
    <div id="particles-js"> </div>
    <div class="name__page">

      </a>

    </div>

    <div class="options__menu">
      <a href="dashboard.php?mod=inicio" class="selected">
        <div class="option">
          <i class="fas fa-home" title="Inicio"></i>
          <h4>Inicio</h4>
        </div>
      </a>

      <a href="dashboard.php?mod=ranking">
        <div class="option">
          <i class="fa-solid fa-ranking-star" title="Portafolio"></i>
          <h4>Ranking</h4>
        </div>
      </a>

      <a href="dashboard.php?mod=pruebas">
        <div class="option">
          <i class="fas fa-graduation-cap" title="Cursos"></i>
          <h4>Materias</h4>
        </div>
      </a>


      <a href="dashboard.php?mod=juegos">
        <div class="option">
          <i class="fa-solid fa-gamepad" title="Blog"></i>
          <h4>Juegos</h4>
        </div>
      </a>

      <a href="dashboard.php?mod=consejos">
        <div class="option">
          <i class="far fa-comments" title="Contacto"></i>
          <h4>Consejos</h4>
        </div>
      </a>
      <a href="dashboard.php?mod=galeria">
        <div class="option">
          <i class="fa-solid fa-paint-roller" title="Contacto"></i>
          <h4>Galeria</h4>
        </div>
      </a>
      <?php

      if ($fkRol == 12) {
        ?>
        <a href="dashboard.php?mod=Admin">
          <div class="option">
            <i class="fa-solid fa-palette"></i>
            <h4>Administracion</h4>
          </div>
        </a>
        <?php
      }
      ?>
      <a href="dashboard.php?mod=libros">
        <div class="option">
          <i class="fa-solid fa-book" title="Nosotros"></i>
          <h4>Libros</h4>
        </div>
      </a>
      <?php

      if ($fkRol == 12) {
        ?>
        <a href="dashboard.php?mod=user">
          <div class="option">
            <i class="fa-solid fa-user-plus" title="Nosotros"></i>
            <h4>Usuario</h4>
          </div>
        </a>
        <?php
      }
      ?>

      <a href="dashboard.php?mod=perfil">
        <div class="option">
          <i class="fa-solid fa-user" title="Nosotros"></i>
          <h4>Perfil</h4>
        </div>
      </a>
      </a>
      <a href="salir.php">
        <div class="option">
          <i class="fa-solid fa-right-from-bracket" title="Nosotros"></i>
          <h4>Salir</h4>
        </div>
      </a>
      <a href="#">
        <div class="option">
          <i class="fa-solid fa-gear" title="Nosotros"></i>
          <h4>Configuración</h4>
        </div>
      </a>

    </div>

  </div>

  <?php
  if (@$_GET['mod'] == "") {

    require_once("modulo/inicio.php");
  } else
    if (@$_GET['mod'] == "inicio") {

      require_once("modulo/inicio.php");
    } else
      if (@$_GET['mod'] == "ranking") {

        require_once("modulo/ranking/ranking.php");
      } else
        if (@$_GET['mod'] == "libros") {

          require_once("modulo/libros.php");
        } else
          if (@$_GET['mod'] == "consejos") {

            require_once("modulo/consejos/index.php");
          } else
            if (@$_GET['mod'] == "juegos") {

              require_once("modulo/juegos/juegos.php");
            } else
              if (@$_GET['mod'] == "pruebas") {

                require_once("modulo/pruebas.php");
              } else
                if (@$_GET['mod'] == "perfil") {

                  require_once("modulo/perfil.php");
                } else

                  if (@$_GET['mod'] == "galeria") {

                    require_once("modulo/galeria/galeria.php");

                  }

  ?>
  <div class="mover">
    <?php
    if (@$_GET['mod'] == "Lectura") {

      require_once("modulo/preguntas/Lectura/español.php");
    } else
      if (@$_GET['mod'] == "Matematicas") {

        require_once("modulo/preguntas/matematica/matematicas.php");
      } else
        if (@$_GET['mod'] == "Ingles") {

          require_once("modulo/preguntas/ingles/ingles.php");
        } else
          if (@$_GET['mod'] == "Sociales") {

            require_once("modulo/preguntas/sociales/sociales.php");
          } else
            if (@$_GET['mod'] == "Ciencias") {

              require_once("modulo/preguntas/ciencias/ciencias.php");
            } else

    ?>
    <script src="../menu/modulo/preguntas/Lectura/js/main.js"></script>
    <script src="../menu/modulo/preguntas/Lectura/js/pasar.js"></script>
    <script src="/zonas/htmls/menu/modulo/preguntas/matematica/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  </div>
  <?php
  if (@$_GET['mod'] == "crud-mat") {
    require_once("modulo/preguntas/matematica/preicfes/crud-mat.php");
  } else
    if (@$_GET['mod'] == "crud-soc") {
      require_once("modulo/preguntas/sociales/preicfes/crud-soc.php");
    } else
      if (@$_GET['mod'] == "crud-cie") {
        require_once("modulo/preguntas/ciencias/preicfes/crud-cie.php");
      } else
        if (@$_GET['mod'] == "crud-ing") {
          require_once("modulo/preguntas/ingles/preicfes/crud-ing.php");
        } else


          if ($fkRol == 12) {

            if (@$_GET['mod'] == "user") {

              require_once("modulo/administracion/user.php");
            }
            if (@$_GET['mod'] == "Admin") {

              require_once("modulo/galeria/admin/administracion.php");
            }


          }





  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/zonas/htmls/js/jsmenu.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


  <!--<script>
    window.addEventListener("beforeunload", function (e) {
      e.returnValue = "¿Estás seguro de que deseas cerrar la sesión?"; // Mensaje personalizado
      fetch("salir.php", {
        method: "POST",
        credentials: "include"
      });
    });
  </script>-->

</body>

</html>