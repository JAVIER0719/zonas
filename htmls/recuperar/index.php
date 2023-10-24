<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperar contraseña</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/zonas/htmls/css/olvidecss.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
  <div class="form-gap"></div>
  <div class="container">
    <div class="row">
      <div class="conta col-md-4 col-md-offset-4">
        <div class="panelaa panel-default">
          <div class="panel-body-">
            <div class="text-center">
              <h3><i class="fa fa-lock fa-4x"></i></h3>
              <h2 class="text-center">Has olvidado tu contraseña?</h2>
              <p>Puede restablecer su contraseña aquí.</p>
              <div class="panel-body">

                <form id="register-form" role="form" autocomplete="off" class="form" method="post">

                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                      <input id="email" name="email" placeholder="Dirección de correo electrónico" class="form-control"
                        type="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <input name="recover-submit" class="btn btn-lg btn-primary btn-block"
                      value="Restablecer la contraseña" type="submit">
                  </div>

                  <input type="hidden" class="hide" name="token" id="token" value="">
                  <div class="boton2">
                    <a href="../inicio/index.php" class="account3 ">
                      Iniciar sesion</a>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>