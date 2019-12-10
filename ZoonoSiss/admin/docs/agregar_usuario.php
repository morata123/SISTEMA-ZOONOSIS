
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="../../js/validacion.js"></script>
    <?php include_once('menu.php');
    include_once('../../modelo/mdl_login.php');
    $obj=new mdl_login();
    $datos=$obj->buscar_correo();
    $em=mysqli_fetch_assoc($datos);
    $email=$em['email'];
    $id_per=$em['id_persona'];
    $rol=$em['rol'];
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $password = "";
    //Reconstruimos la contraseña segun la longitud que se quiera
    for($i=0;$i<8;$i++) {
        //obtenemos un caracter aleatorio escogido de la cadena de caracteres
        $password .= substr($str,rand(0,62),1);
    }
    //Mostramos la contraseña generad
    $_SESSION['password']=$password;
    ?>
</head>
<body>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i>Usuario</h1>
            <p>Registro Cuenta</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Cuenta</li>
            <li class="breadcrumb-item"><a href="#">Registro Cuenta</a></li>
        </ul>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="tile">

                    <div class="tile-body">
                        <form name="f1" action="../../enrutador/enr_login.php" method="post" autocomplete="off" >
                           <div class="card">
                               <div class="card-header"><center><h3 class="tile-title">Persona</h3></center></div>
                               <div class="card-body">
                                <input type="hidden" value="<?php echo($id_per) ?>" name="id_per">
                                <input type="hidden" value="<?php echo($rol) ?>" name="rol">
                                   <div class="form-group row"><label for="nick" class="col-md-4 col-form-label text-md-right">Email</label><div class="col-md-6"><input readonly type="email" name="nick" id="nick" class="form-control" value="<?php echo($email) ?>" required autofocus></div></div>
                                   <div class="form-group row"><label for="1clave" class="col-md-4 col-form-label text-md-right" >Clave</label><div class="col-md-6"><input value="<?php echo $password?>" readonly type="text" name="1clave" id="1clave" class="form-control" required maxlength="16" minlength="8" onkeypress="return validar(event);"></div></div>
                                   <div class="form-group row"><label for="2clave" class="col-md-4 col-form-label text-md-right" >Confirmar Clave</label><div class="col-md-6"><input value="<?php echo $password?>" readonly type="text" name="2clave" id="2clave" class="form-control" required maxlength="16" minlength="8"  onblur="validar_clave();" onkeypress="return validar(event);"></div>
                                   <div id="msj_verificacion" style="display: none"> La clave no coincide...</div>
                                  </div>
                               </div>
                               <div class="card-footer">
                                   <div class="form-group row">
                                       <div class="col-md-4"><button type="submit" class="btn btn-primary col-md-12" name="agregar" id="agregar">Agregar</button></div>
                                <div class ="col-md-4"><button type="reset" class="btn btn-info col-md-12">
                                        <span class="glyphicon glyphicon-pencil"></span>Limpiar
                                    </button></div>
                                <div class ="col-md-4"><a class="btn btn-danger col-md-12" href="menu.php" >Cancelar</a></div>
                               </div>
                               </div>
                           </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</main>
</body>
</html>