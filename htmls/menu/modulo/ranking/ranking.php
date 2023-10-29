<?php
include("db.php"); // Asegúrate de incluir el archivo de conexión a la base de datos

$query = "SELECT usuario.*, resultado_usuario.*, materias.descripcion_materia
          FROM usuario
          INNER JOIN resultado_usuario ON usuario.doc = resultado_usuario.fk_usodoc
          INNER JOIN materias ON resultado_usuario.fk_mat = materias.id_materia";

$result = $conn->query($query);

if (!$result) {
  die("Error en la consulta SQL: " . $conn->error);
}

if ($result->num_rows > 0) {
  ?>
  <!DOCTYPE html>
  <html lang="es">

  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://localhost/zonas/htmls/menu/modulo/css1/rankin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://localhost/zonas/htmls/menu/modulo/css1/rankin.css">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Ranking</title>
  </head>

  <body>
    <center>
      <h1 class="fa fa-trophy">ranking</h1>
    </center>
    <table border="1">
      <thead>
        <tr>
          <th>*</th>
          <th>ID Resultado</th>
          <th>FK Usuario</th>
          <th>Nota</th>
          <th>Tiempo en Prueba</th>
          <th>Primer Nombre</th>
          <th>Primer Apellido</th>
          <th>Descripción Materia</th>
        </tr>
      </thead>
      <tbody>
        <?php


        $num = 1;
        $contador = 0;

        while ($contador < 3 && ($row = $result->fetch_assoc())) {
          #if ($row["nota"] >= 15 && $row["nota"] <= 21) {

            ;
            ?>
            <tr>
              <td>
                <p>
                <p>
                  <?= $num ?>
                </p>
                </p>
              </td>
              <td>
                <?= $row["id_resultado"] ?>
              </td>
              <td>
                <?= $row["doc"] ?>
              </td>
              <td>
                <?= $row["nota"] ?>
              </td>
              <td>
                <?= $row["tiempo_en_prueba"] ?>
              </td>
              <td>
                <?= $row["primer_nombre"] ?>
              </td>
              <td>
                <?= $row["primer_apellido"] ?>
              </td>
              <td>
                <?= $row["descripcion_materia"] ?>
              </td>
            </tr>

            <?php
            $num++;
         # }

        }
        ?>
      </tbody>
    </table>
  </body>

  </html>
  <?php
} else {
  echo "No se encontraron resultados.";
}

$conn->close();
?>