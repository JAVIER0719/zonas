<?php
include("db.php");
$query = "SELECT * FROM `espanol`;";
$resultado = $conn->query($query);
if (
  $_SERVER['REQUEST_METHOD'] === 'POST' &&
  isset($_POST['enviar'])
) {
  $nota = $_POST['nota'];
  $crono = $_POST['tiempo'];
  $doc = $_POST['doc'];
  $id = $_POST['id'];

  $sql = "INSERT INTO
`resultado_usuario` (`fk_usodoc`, `nota`, `tiempo_en_prueba`, `id_resultado`,
`fk_mat`) VALUES (?, ?, ?, NULL, $id)";
  $stmt = mysqli_prepare($conn, $sql);
  if
  (!$stmt) {
    echo "Error: " . mysqli_error($conn);
    exit;
  }
  mysqli_stmt_bind_param($stmt, "iss", $doc, $nota, $crono);
  if
  (mysqli_stmt_execute($stmt)) {
    echo '
<script>
  setTimeout(function () {
    window.location.href =
      "http://localhost/zonas/htmls/menu/dashboard.php?mod=pruebas";
  }, 1000);
</script>
';
    exit();
  } else {
    echo "Error: " . mysqli_error($conn);
    echo '
<script>
  setTimeout(function () {
    swal({
      title: "Sus datos no coinciden",
      text: "Verifique y mande de nuevo",
      icon: "warning",
    });
  }, 1000);
</script>
';
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
} ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="css/estilos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<body style="background: linear-gradient(white, skyblue);">

  <main>
    <?php
    if ($fkRol == 12) {
      ?>
      <a href="dashboard.php?mod=crud-esp">scrud_español</a>
      <?php
    }
    ;
    ?>
    <form action="http://localhost/zonas/htmls/menu/dashboard.php?mod=Lectura" method="post">
      <div class="input-container">
        <label for="tiempo">Tiempo transcurrido:</label>
        <input type="text" name="tiempo" id="tiempo" readonly />
      </div>
      <button type="button" class="btn" onclick="iniciarCronometro()">
        Iniciar
      </button>
      <input type="hidden" id="" placeholder="ingresa su documento" name="doc" value="<?php echo $doc; ?>" />
      <input type="hidden" id="" placeholder="el numero que corresponde" name="id" value="2" />
      <!--pregunta 1-->
      <?php
      if ($resultado) {
        $contador = 1;
        $contador1 = 2;
        $contador2 = 3;
        $contador3 = 4;
        $nombre = 1;
        while ($fila = $resultado->fetch_object()) {
          $imageData = $fila->img3;
          $base64Image = base64_encode($imageData);
          ?>
          <div class="caja">
            <ol type="A">
              <p class="parrafo">
                <b>


                  <?= $fila->texto2 ?>
                  <img height="150px" src="data:image/jpeg;base64,<?= $base64Image ?>" alt="<?= $base64Image ?>" />

                </b>
              </p>
              <br />
              <p class="parrafo">
                <b>
                  <?= $fila->pregunta2 ?>
                </b>
              </p>
              <li>

                <input type="radio" name="<?= $nombre ?>" id="<?= $contador + 4 ?>" />
                <?= $fila->a2 ?>

              </li>
              <li>

                <input type="radio" name="<?= $nombre ?>" id="<?= $contador1 + 5 ?>" />
                <?= $fila->b2 ?>

              </li>
              <li>

                <input type="radio" name="<?= $nombre ?>" id="<?= $contador2 + 6 ?>" />
                <?= $fila->c2 ?>

              </li>

              <li>

                <input type="radio" name="<?= $nombre ?>" id="<?= $contador3 + 7 ?>" />
                <?= $fila->d2 ?>
              </li>
            </ol>
          </div>
          <br />
          <hr />
          <?php
          $contador += 4;
          $contador1 += 4;
          $contador2 += 4;
          $contador3 += 4;
          $nombre += 1;
        }
      } else {
        echo "Error en la consulta: " . $conn->error;
      }
      ?>


      <input type="hidden" id="notaInput" name="nota" value="" />
      <button style="margin-left: 40%;" name="" type="button" class="btn btn-primary"
        onclick="procesarRespuestasYGenerarNota()">Ver mi
        resultado</button>
      <button style="margin-left: 90%;" name="enviar" type="submit" class="btn btn-primary"
        onclick="resultado1()">Enviar resultado</button>
      </button>
    </form>
  </main>

  <script src="../menu/modulo/preguntas/Lectura/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</body>

</html>