
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>zoonosis</title>
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="../../js/validacion.js"></script>
    <?php include_once('menu.php');
    include_once ('../../modelo/conexion.php');
    $obj=new conexion();
   
    $sql="select * from registro_mascota join solicitud_adopcion p on solicitud_adopcion.id_mascota = p.id_mascota ";
    $sql="select * from registro_mascota where id_mascota";
    $datos_adopcion=$obj->con_retorno($sql);
    ?>
</head>
<body>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i>Solicitud Adopcion</h1>
            <p>Registro de Solicitud Adopcion</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Solicitud Adopcion</li>
            <li class="breadcrumb-item"><a href="#">Registro de Solicitud Adopcion</a></li>
        </ul>
    </div>
    <div class="container">

        <div class="row">
            <div class="form-group row">
            <div class="col-md-12">
                <div class="card">
                     <div class="card-header">
                        <center><h3>Nuevo Solicitud Adopcion </h3></center>
                    </div>
                    <div class="card-body">
                        <form name="f1" action="../../enrutador/enr_adopcion.php" method="post" autocomplete="off" required>
                            <div class="form-group row"><label for="tipo_vivienda" class="col-md-4 col-form-label text-md-right">tipo_vivienda:</label><div class="col-md-6"><input type="text" name="tipo_vivienda" id="tipo_vivienda" class="form-control" value="" maxlength="25" required autofocus onkeypress="return sololetras(event);"></div></div>
                            <div class="form-group row"><label for="descripcion" class="col-md-4 col-form-label text-md-right">descripcion:</label><div class="col-md-6"><input type="text" name="descripcion" id="descripcion" class="form-control" value="" maxlength="25" required autofocus onkeypress="return sololetras(event);"></div></div>
                            <div class="form-group row"><label for="fecha_solicitud" class="col-md-4 col-form-label text-md-right">fecha_solicitud:</label><div class="col-md-6"><input type="date" name="fecha_solicitud" id="fecha_solicitud" class="form-control" value="" maxlength="25" required autofocus onkeypress="return sololetras(event);"></div></div>
                            <div class="form-group row"><label for="nombre_solicitante" class="col-md-4 col-form-label text-md-right">nombre_solicitante:</label><div class="col-md-6"><input value="" type="text" name="nombre_solicitante" id="nombre_solicitante" class="form-control"  required onpaste="return false" onkeypress="return numeros(event);" maxlength="11"></div></div>
                            <div class="form-group row"><label for="ci_solicitante" class="col-md-4 col-form-label text-md-right">ci_solicitante:</label><div class="col-md-6"><input value="" type="tel" name="ci_solicitante" id="ci_solicitante" class="form-control"  required onpaste="return false" onkeypress="return numeros(event);" maxlength="11"></div></div>
                            <div class="form-group row"><label for="id_mascota" class="col-md-4 col-form-label text-md-right">mascota:</label><div class="col-md-6">
                            <div class="col-md-6">
                                    <select class="custom-select" name="id_mascota" required>
                                        <option value="" disabled selected hidden>Nada Seleccionado</option>
                                        <?php
                                        while ($row4=mysqli_fetch_assoc($datos_adopcion)){
                                            echo "<option value='$row4[id_mascota]'>".$row4['nombre']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <hr>
                            <div class="card-footer">
                           <div class="form-group row" style="text-align:center">
                               <div class="col-md-4">
                                    <button type="submit" class="btn btn-outline-primary" name="registrar">
                                        <span class="glyphicon glyphicon-log-in"></span> Registrar
                                    </button>
                                </div>
                                <div class ="col-md-4"><button type="reset" class="btn btn-dark">
                                        <span class="glyphicon glyphicon-pencil"></span>Limpiar
                                    </button>
                                </div>
                                <div class ="col-md-4"><a class="btn btn-danger" href="index.php">Cancelar
                                    </a>
                                </div>
                            </div>
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


