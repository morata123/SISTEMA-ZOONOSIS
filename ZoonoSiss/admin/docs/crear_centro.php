<?php 
include_once ('../../modelo/conexion.php');
$con=new conexion();
$sql="select * from datos_centro where nombre";
$datos=$con->con_retorno($sql);

 ?>
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
    ?>
</head>
<body>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> Datos Centro Zoonosis</h1>
            <p>Registro Centro</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Centro</li>
            <li class="breadcrumb-item"><a href="#"> Registro Centro</a></li>
        </ul>
    </div>
    <div class="container">

        <div class="row">
            <div class="form-group row">
            <div class="col-md-20">
                <div class="card">
                     <div class="card-header">
                        <center><h3>Nuevo Datos Centro</h3></center>
                    </div>
                    <div class="card-body">
                        <form name="f1" action="../../enrutador/enr_centro.php" method="post" autocomplete="off" required>
                            <div class="form-group row"><label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre:</label><div class="col-md-6"><input type="text" name="nombre" id="nombre" class="form-control" value="" maxlength="25" required autofocus onkeypress="return sololetras(event);"></div></div>
                            <div class="form-group row"><label for="descripcion" class="col-md-4 col-form-label text-md-right">descripcion:</label><div class="col-md-6"><input type="text" name="descripcion" id="descripcion" class="form-control" value="" maxlength="25" required autofocus onkeypress="return sololetras(event);"></div></div>
                            <div class="form-group row"><label for="direccion" class="col-md-4 col-form-label text-md-right">direccion:</label><div class="col-md-6"><input type="text" name="direccion" id="direccion" class="form-control" value="" maxlength="25" required autofocus onkeypress="return sololetras(event);"></div></div>
                            <div class="form-group row"><label for="telefono" class="col-md-4 col-form-label text-md-right">telefono:</label><div class="col-md-6"><input value="" type="tel" name="telefono" id="telefono" class="form-control"  required onpaste="return false" onkeypress="return numeros(event);" maxlength="11"></div></div>
                            <div class="form-group row"><label for="celular" class="col-md-4 col-form-label text-md-right">celular:</label><div class="col-md-6"><input value="" type="tel" name="celular" id="celular" class="form-control"  required onpaste="return false" onkeypress="return numeros(event);" maxlength="11"></div></div>
                            <div class="form-group row"><label for="email" class="col-md-4 col-form-label text-md-right">Email:</label><div class="col-md-6"><input  type="email" name="email" id="email" value="" required class="form-control" onkeypress="return correo(event);" maxlength="30"></div></div>
                            <div class="form-group row"><label for="web" class="col-md-4 col-form-label text-md-right">web:</label><div class="col-md-6"><input  type="web" name="web" id="web" value="" required class="form-control" onkeypress="return web(event);" maxlength="30"></div></div>
                            <hr>
                            <div class="form-group row" style="text-align:center"><div class="col-md-4">
                                    <button type="submit" class="btn btn-outline-primary" name="registrar">
                                        <span class="glyphicon glyphicon-log-in"></span> Registrar
                                    </button>
                                </div>
                                <div class ="col-md-4"><button type="reset" class="btn btn-dark">
                                        <span class="glyphicon glyphicon-pencil"></span>Limpiar
                                    </button></div>
                                <div class ="col-md-4"><a class="btn btn-danger" href="index.php">Cancelar
                                    </a></div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>



                





        </div>
        </div>
    </div>

</main>
</body>
</html>
