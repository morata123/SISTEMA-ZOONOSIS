<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="../../logo/apple-icon.png"/>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="../../js/validacion.js"></script>
    <title>Internship</title>
</head>

<body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Internship</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="./php/verifs.php" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Verificación</h3>
		  <br>
          <div class="form-group">
            <label class="control-label" for="nick">Ingrese código</label>
            <input class="form-control" type="text" id="nick" name="codigo2" placeholder="Código" onkeypress="return solonumeros(event)" maxlength="8" required autofocus autocomplete="off">
          </div>
          
          <div class="form-group">
            
          </div>
		  <br>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit" name="boton"><i class="fa fa-sign-in fa-lg fa-fw"></i>Verificar</button>
          </div>
            <div class="form-group mt-3">
                <p class="semibold-text mb-0">Introducir código para restablecer su contraseña</p>
            </div>

            <div class="form-group mt-3">
                <p class="semibold-text mb-0"><a href="page-login.php"><i class="fa fa-angle-left fa-fw"></i> Regresar al Inicio</a></p>
            </div>
        </form>
        
         <!--<form class="forget-form" action="envia.php" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Olvido la clave ?</h3>
          <div class="form-group">
            <label class="control-label">CORREO</label>
            <input class="form-control" type="correo" placeholder="Email" name="correo" required autofocus autocomplete="off">
          </div> 
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit" name="correo"><i class="fa fa-unlock fa-lg fa-fw"></i>Enviar correo</button>
          </div>
          
          <div class="form-group mt-3">
            <p class="semibold-text mb-0">Se enviará un codigo verificación para ingresar una nueva contraseña</p>
          </div>
          
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Regresar al Inicio</a></p>
          </div>
        </form>-->
        
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>
