<?php
include('db.php');
if (empty($_POST['enviar'])) {
    if (!empty($_POST['email']) and !empty($_POST['doc']) and !empty($_POST['nam']) and !empty($_POST['nam2']) and !empty($_POST['ape']) and !empty($_POST['ape2']) and !empty($_POST['pass']) and !empty($_POST['cel']) and !empty($_POST['tipo']) and !empty($_POST['grado']) and !empty($_POST['cate'])) {
        $id = $_POST["id"];
        $email = $_POST["email"];
        $doc = $_POST["doc"];
        $nam1 = $_POST["nam"];
        $nam2 = $_POST["nam2"];
        $ape1 = $_POST["ape"];
        $ape2 = $_POST["ape2"];
        $pass = $_POST["pass"];
        $phone = $_POST["cel"];
        $tipo = $_POST["tipo"];
        $grado = $_POST["grado"];
        $cate = $_POST["cate"];
        $encrip = md5($pass);

        $sql = $conn->query("UPDATE usuario SET doc = '$doc', correo = '$email', primer_nombre = '$nam1', segundo_nombre = '$nam2', primer_apellido = '$ape1', segundo_apellido = '$ape2', clave = '$encrip', cel = '$phone', tipo_docu = '$tipo', grado = '$grado', fk_rol = '$cate'
        WHERE doc = $id");
        if ($sql) {
            echo '<div class="alert alert-success">Persona eliminada correctamente</div>';
            echo '<script>
            setTimeout(function() {
                window.location.href = "http://localhost/zonas/htmls/menu/dashboard.php?mod=user";
            }, 1000); 
          </script>';

        } else {

            echo '<div class="alert alert-danger">No se pudo actualizar, revisa tu código</div>';
        }

    }
} else {
    echo '<div class="alert alert-warning">Llena todos los datos</div>';
}



?>