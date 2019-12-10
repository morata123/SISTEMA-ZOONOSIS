 <?php include_once('menu.php');
 include_once('../../modelo/mdl_agregarusuario.php');
 $obj=new mdlusuario();
 $datos=$obj->buscar_persona($_GET['c']);
 $em=mysqli_fetch_assoc($datos);
 $email=$em['email'];
 $nombre=$em['nombre'];
 $appaterno=$em['papellido'];
 $apmaterno=$em['sapellido'];
 $ci=$em['ci'];
 $telefono=$em['telefono'];
 $direccion=$em['direccion'];
 $id_per=$em['id_persona'];
 $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
 $password = "";
 //Reconstruimos la contraseña segun la longitud que se quiera
 for($i=0;$i<8;$i++) {
     //obtenemos un caracter aleatorio escogido de la cadena de caracteres
     $password .= substr($str,rand(0,62),1);
 }
 //Mostramos la contraseña generad
 $_SESSION['password']=$password;
 if(@$_SESSION['error']=="exitoso"){
     echo "<script>swal(
  'Tramite Exitoso!',
  'Registro Satisfactorio!',
  'success'
)</script>";
     $_SESSION['error']=" ";
 }
 ?>
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
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <form name="f1" action="../../enrutador/enr_login.php" method="post" autocomplete="off" >
                                <div class="card-header"><center><h3 class="tile-title">Datos Personales</h3></center></div>
                                <div class="card-body">
                                    <input type="hidden" value="<?php echo($id_per) ?>" name="id_per">
                                    <input type="hidden" value="<?php echo($rol) ?>" name="rol">
                                        <div class="form-group row"><label for="nombre" class="col-md-4 col-form-label text-md-right">nombre</label><div class="col-md-6"><input readonly type="text" name="nombre" id="nombre" class="form-control" value="<?php echo($nombre) ?>" required autofocus></div></div>
                                        <div class="form-group row"><label for="appaterno" class="col-md-4 col-form-label text-md-right">appaterno</label><div class="col-md-6"><input readonly type="text" name="appaterno" id="appaterno" class="form-control" value="<?php echo($appaterno) ?>" required autofocus></div></div>
                                        <div class="form-group row"><label for="apmaterno" class="col-md-4 col-form-label text-md-right">apmaterno</label><div class="col-md-6"><input readonly type="text" name="apmaterno" id="apmaterno" class="form-control" value="<?php echo($apmaterno) ?>" required autofocus></div></div>
                                        <div class="form-group row"><label for="ci" class="col-md-4 col-form-label text-md-right">ci</label><div class="col-md-6"><input readonly type="text" name="ci" id="ci" class="form-control" value="<?php echo($ci) ?>" required autofocus></div></div>
                                        <div class="form-group row"><label for="telefono" class="col-md-4 col-form-label text-md-right">telefono</label><div class="col-md-6"><input readonly type="text" name="telefono" id="telefono" class="form-control" value="<?php echo($telefono) ?>" required autofocus></div></div>
                                        <div class="form-group row"><label for="direccion" class="col-md-4 col-form-label text-md-right">direccion</label><div class="col-md-6"><input readonly type="text" name="direccion" id="direccion" class="form-control" value="<?php echo($direccion) ?>" required autofocus></div></div>
                                        <div class="form-group row"><label for="nick" class="col-md-4 col-form-label text-md-right">Email</label><div class="col-md-6"><input readonly type="email" name="nick" id="nick" class="form-control" value="<?php echo($email) ?>" required autofocus></div></div>
                                        <div class="form-group row"><label for="1clave" class="col-md-4 col-form-label text-md-right" >Clave</label><div class="col-md-6"><input value="<?php echo $_SESSION['password']?>" readonly type="text" name="1clave" id="1clave" class="form-control" required maxlength="16" minlength="8"></div></div>
                              </div>

                                    <div class="form-group row">
                                        <div class="row d-print-none mt-2">
                                            <div class="col-md-6 text-right"><a class="btn btn-primary" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Imprimir</a></div>
                                            <div class="col-md-6 text-right"><button class="btn btn-primary" type="submit" name="agregar" >Finalizar</button></div>
                                        </div>
                                       <!-- <div class ="col-md-4"><a class="btn btn-danger col-md-12" href="agregar_usuario.php" >Cancelar</a></div>-->
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
