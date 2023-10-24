<?php
include('db.php');

$query = "SELECT doc, correo, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, clave, cel, tipo_docu, grado, fk_rol
          FROM usuario 
          LEFT JOIN permisos ON usuario.rol = permisos.id";

//&& isset($_POST[''])) {

if (!empty($_GET['id'])) {
	$id = $_GET['id'];
	$stmt = $conn->prepare("DELETE FROM usuario WHERE doc = ?");
	$stmt->bind_param("s", $id);
	if (!$stmt->execute()) {
		echo "Error: " . $stmt->error;
	}
	if ($stmt->execute()) {
		echo '<div class="alert alert-success">Persona eliminada correctamente</div>';
		echo '<script>
        setTimeout(function() {
            window.location.href = "http://localhost/zonas/htmls/menu/dashboard.php?mod=user";
        }, 3000); 
      </script>';
	} else {
		echo '<div class="alert alert-danger">Persona no se pudo eliminadar correctamente</div>';
		echo '<script>
        setTimeout(function() {
            window.location.href = "http://localhost/zonas/htmls/menu/dashboard.php?mod=user";
        }, 3000); 
      </script>';
	}
}

?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="http://localhost/zonas/htmls/menu/modulo/css1/user.css">
<script src="js/aser.js"></script>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
	<div class="container">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Tabla <b>Administracion</b></h2>
					</div>
					<?php


					?>
					<div class="col-sm-6">

						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
								class="material-icons">&#xE147;</i> <span>Agregar persona</span></a>
					</div>


					<!-- Modal de formulario -->
					<div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog"
						aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Agregar Persona</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<!-- Aquí colocas tu formulario -->
									<form action="http://localhost/zonas/htmls/menu/dashboard.php?mod=user"
										method="post">
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
            window.location.href = "http://localhost/zonas/htmls/menu/dashboard.php?mod=user";
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

										<div class="left-side">

											<div id="for" class="signup-form s_form">

												<div class="main active" id="form1">
													<div class="top-div">
														<p>Ingresar persona</p>
													</div>
													<div class="input-text">
														<input name="nam1" type="text" placeholder="Primer nombre"
															id="user_name" require>
													</div>
													<div class="input-text">
														<input id="nom2" name="nam2" type="text"
															placeholder="Segundo nombre">
													</div>
													<div class="input-text">
														<input id="apel" name="ape1" type="text"
															placeholder="Primer apellido" require>
													</div>
													<div class="input-text">
														<input id="apel2" name="ape2" type="text"
															placeholder="Segundo apllido">
													</div>
													<div class="input-text">
														<select name="cate" require>
															<option value="10">Estudiante</option>
															<option value="12">Administrador</option>
														</select>
													</div>


												</div>

												<div class="main" id="form2">
													<div class="top-div">
														<p>Rellene los seguientes datos</p>
													</div>
													<div class="input-text">
														<input id="cell" name="phone" type="number"
															placeholder="Numero de telefono" require>
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
														<input id="ndocu" type="number" name="doc"
															placeholder="Ingrese su numero de documento" require>
													</div>
													<div class="input-text" require>
														<select id="Grado" name="grad" require>
															<option>Grado</option>
															<option>Décimo</option>
															<option>Undécimo</option>
														</select>
													</div>

												</div>

												<div class="main " id="form3">
													<div class="top-div">
														<p>Rellene los seguientes datos</p>
													</div>
													<div class="input-text">
														<input id="corre" type="text" name="email"
															placeholder="Ingrese su dirección de correo electrónico"
															require>
													</div>

													<div class="input-text">
														<input id="cont" type="password" name="clave1"
															placeholder="Confirmar contraseña" require>
													</div>


												</div>
												<button type="submit" name="enviar" id="btn1"
													class="submit_button">SIGUIENTE</button>


											</div>

										</div>

									</form>

								</div>


							</div>
						</div>
					</div>
				</div>
			</div>

			<table class="table table-striped table-hover">

				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>documento</th>
						<th>correo</th>
						<th>nombre1</th>
						<th>nombre2</th>
						<th>P-apellido</th>
						<th>S-apelliod2</th>
						<th>clave</th>
						<th>N-cel</th>
						<th>tipo de documento</th>
						<th>grado</th>
						<th>rol</th>
						<th>editar</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql = $conn->query("SELECT * FROM usuario");
					while ($datos = $sql->fetch_object()) { ?>
						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox1" name="options[]" value="1">
									<label for="checkbox1"></label>
								</span>
							</td>
							<td>
								<?= $datos->doc ?>
							</td>
							<td>
								<?= $datos->correo ?>
							</td>
							<td>
								<?= $datos->primer_nombre ?>
							</td>
							<td>
								<?= $datos->segundo_nombre ?>
							</td>
							<td>
								<?= $datos->primer_apellido ?>
							</td>
							<td>
								<?= $datos->segundo_apellido ?>
							</td>
							<td>
								<?= $datos->clave ?>
							</td>
							<td>
								<?= $datos->cel ?>
							</td>
							<td>
								<?= $datos->tipo_docu ?>
							</td>
							<td>
								<?= $datos->grado ?>
							</td>
							<td>
								<?= $datos->fk_rol ?>
							</td>
							<td>
								<a href="modulo/administracion/modificar.php?id=<?= $datos->doc ?>" data-toggle="modal"><i
										class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

								<!--<button type="button" name="mandaralerta"
								onclick="confirmarEliminar(
								<?= $datos->doc ?>)">Eliminar</button>-->
								<a href="/zonas/htmls/menu/modulo/administracion/user.php?id=<?= $datos->doc ?>"
									data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
										title="Delete">&#xE872;</i></a>
								<!--<script>
									function confirmarEliminar(userId) {
										swal({
											title: "Estas seguro que deseas eliminar a este usuario?",
											text: "No podras recuperar nada luego de que digas que si!",
											icon: "warning",
											buttons: true,
											dangerMode: true,
										})
											.then((willDelete) => {
												if (willDelete) {
													swal("Haz tomado la mejor solucion", {
														icon: "success",
													});
													window.location.href = 'http://localhost/zonas/htmls/menu/dashboard.php?mod=user' + userId;
												} else {
													swal("Haz tomado la mejor decision");
												}
											});

									}
								</script>-->
							</td>
						</tr>
					<?php }
					;

					?>

				</tbody>
			</table>
			<!--<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Atras</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">Adelante</a></li>
				</ul>
			</div>-->
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="modificar" style="display: none;" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Agregar usuario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="form-group">
						<label>Correo</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Numero de documento</label>
						<input type="number" class="form-control" required>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Primer nombre</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>segundo_nombre nombre</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Primer apellido</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Segundo apellido</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Contraseña</label>
							<input type="password" class="form-control" required>
						</div>
						<div class="form-group">
							<label>telefono</label>
							<input type="number" class="form-control" required>
						</div>
						<div class="input-text" require>
							<select id="Grado" name="tipo" require>
								<option values="T.I">Tarjeta de identidad</option>
								<option values="C.C">Cedula de ciudadania</option>
								<option values="C.E">Cedula de extrangeria</option>
							</select>
						</div>
						<div class="input-text" require>
							<select id="Grado" name="grado" require>
								<option>Decimo</option>
								<option>Undecimo</option>
							</select>
						</div>
						<div class="input-text">
							<select name="cate" require>
								<option value="10">Estudiante</option>
								<option value="12">Administrador</option>
							</select>
						</div>


						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input type="submit" class="btn btn-info" value="Save">
						</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Modificar usuario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="form-group">
						<label>Correo</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Numero de documento</label>
						<input type="number" class="form-control" required>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Primer nombre</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>segundo_nombre nombre</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Primer apellido</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Segundo apellido</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Contraseña</label>
							<input type="password" class="form-control" required>
						</div>
						<div class="form-group">
							<label>telefono</label>
							<input type="number" class="form-control" required>
						</div>
						<div class="input-text" require>
							<select id="Grado" name="tipo" require>
								<option values="T.I">Tarjeta de identidad</option>
								<option values="C.C">Cedula de ciudadania</option>
								<option values="C.E">Cedula de extrangeria</option>
							</select>
						</div>
						<div class="input-text" require>
							<select id="Grado" name="grado" require>
								<option>Decimo</option>
								<option>Undecimo</option>
							</select>
						</div>
						<div class="input-text">
							<select name="cate" require>
								<option value="10">Estudiante</option>
								<option value="12">Administrador</option>
							</select>
						</div>


						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input type="submit" class="btn btn-info" value="Save">
						</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Delete Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</body>

</html>