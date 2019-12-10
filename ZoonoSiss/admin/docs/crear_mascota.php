
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

    $sql="select * from raza join registro_mascota p on registro_mascota.id_raza = p.id_raza ";
    $sql="select * from raza where id_raza";
    $datos_raz=$obj->con_retorno($sql);

    $sql="select * from datos_centro join registro_mascota p on registro_mascota.id_centro = p.id_centro ";
    $sql="select * from datos_centro where id_centro";
    $datos_centro=$obj->con_retorno($sql);

    $sql="select * from senas_particulares join registro_mascota p on registro_mascota.id_senas_particulares = p.id_senas_particulares ";
    $sql="select * from senas_particulares where id_senas_particulares";
    $datos_señas=$obj->con_retorno($sql);

    $sql="select * from grado_peligro join registro_mascota p on registro_mascota.id_grado_peligro = p.id_grado_peligro ";
    $sql="select * from grado_peligro where id_grado_peligro";
    $datos_grado=$obj->con_retorno($sql);

    $sql="select * from registro_vacunas join registro_mascota p on registro_mascota.id_vacuna = p.id_vacuna ";
    $sql="select * from registro_vacunas where id_vacuna";
    $datos_vacuna=$obj->con_retorno($sql);
    ?>
</head>
<body>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i>Registro Mascota</h1>
            <p>Registro de Mascota</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Registro Mascota</li>
            <li class="breadcrumb-item"><a href="#"> Registro Mascota</a></li>
        </ul>
    </div>
    <div class="container">

        <div class="row">
            <div class="form-group row">
            <div class="col-md-12">
                <div class="card">
                     <div class="card-header">
                        <center><h3>Nuevo Registro Mascota </h3></center>
                    </div>
                    <div class="card-body">
                        <form name="f1" action="../../enrutador/enr_mascota.php" method="post" autocomplete="off" required>
                        <div class="form-group row"><label for="nombre" class="col-md-2 col-form-label text-md-right">Nombre:</label><div class="col-md-3"><input type="text" name="nombre" id="nombre" class="form-control" value="" maxlength="25" required autofocus onkeypress="return sololetras(event);"></div></div>
                        <div class="form-group row"><label for="fecha_nac" class="col-md-2 col-form-label text-md-right">fecha_nac:</label><div class="col-md-3"><input type="date" name="fecha_nac" id="fecha_nac" class="form-control" value="" maxlength="25" required autofocus onkeypress="return sololetras(event);"></div></div>
                        <div class="form-group row"><label for="especie" class="col-md-2 col-form-label text-md-right">especie:</label><div class="col-md-3"><input type="text" name="especie" id="especie" class="form-control" value="" maxlength="25" required autofocus onkeypress="return sololetras(event);"></div></div>
                        <div class="form-group row"><label for="sexo" class="col-md-2 col-form-label text-md-right">sexo:</label><div class="col-md-3"><input type="text" name="sexo" id="sexo" class="form-control" value="" maxlength="25" required autofocus onkeypress="return sololetras(event);"></div></div>
                        <div class="form-group row"><label for="color" class="col-md-2 col-form-label text-md-right">color:</label><div class="col-md-3"><input type="text" name="color" id="color" class="form-control" value="" maxlength="25" required autofocus onkeypress="return sololetras(event);"></div></div>
                        <div class="form-group row"><label for="tipo_pelo" class="col-md-2 col-form-label text-md-right">tipo_pelo:</label><div class="col-md-3"><input type="text" name="tipo_pelo" id="tipo_pelo" class="form-control" value="" maxlength="25" required autofocus onkeypress="return sololetras(event);"></div></div>
                        <div class="form-group row"><label for="imagen" class="col-md-2 col-form-label text-md-right">imagen:</label><div class="col-md-3"><input type="text" name="imagen" id="imagen" class="form-control" value="" maxlength="25" required autofocus onkeypress="return sololetras(event);"></div></div>
                        <div class="form-group row"><label for="fecha_registro" class="col-md-2 col-form-label text-md-right">fecha_registro:</label><div class="col-md-3"><input type="date" name="fecha_registro" id="fecha_registro" class="form-control" value="" maxlength="25" required autofocus onkeypress="return sololetras(event);"></div></div>    
                            
                            <div class="form-group row"><label for="id_raza" class="col-md-2 col-form-label text-md-right">Raza:</label><div class="col-md-6">
                                <div class="col-md-6">
                                    <select class="custom-select" name="id_raza" required>
                                        <option value="" disabled selected hidden>Nada Seleccionado</option>
                                        <?php
                                        while ($row4=mysqli_fetch_assoc($datos_raz)){
                                            echo "<option value='$row4[id_raza]'>".$row4['nombre']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row"><label for="id_centro" class="col-md-2 col-form-label text-md-right">Centro:</label><div class="col-md-6">
                                <div class="col-md-6">
                                    <select class="custom-select" name="id_centro" required>
                                        <option value="" disabled selected hidden>Nada Seleccionado</option>
                                        <?php
                                        while ($row4=mysqli_fetch_assoc($datos_centro)){
                                            echo "<option value='$row4[id_centro]'>".$row4['nombre']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row"><label for="id_senas_particulares" class="col-md-2 col-form-label text-md-right">señas:</label><div class="col-md-6">
                                <div class="col-md-6">
                                    <select class="custom-select" name="id_senas_particulares" required>
                                        <option value="" disabled selected hidden>Nada Seleccionado</option>
                                        <?php
                                        while ($row4=mysqli_fetch_assoc($datos_señas)){
                                            echo "<option value='$row4[id_senas_particulares]'>".$row4['nombre']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row"><label for="id_grado_peligro" class="col-md-2 col-form-label text-md-right">peligro:</label><div class="col-md-6">
                                <div class="col-md-6">
                                    <select class="custom-select" name="id_grado_peligro" required>
                                        <option value="" disabled selected hidden>Nada Seleccionado</option>
                                        <?php
                                        while ($row4=mysqli_fetch_assoc($datos_grado)){
                                            echo "<option value='$row4[id_grado_peligro]'>".$row4['nombre']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row"><label for="id_vacuna" class="col-md-2 col-form-label text-md-right">Vacuna:</label><div class="col-md-6">
                                <div class="col-md-6">
                                    <select class="custom-select" name="id_vacuna" required>
                                        <option value="" disabled selected hidden>Nada Seleccionado</option>
                                        <?php
                                        while ($row4=mysqli_fetch_assoc($datos_vacuna)){
                                            echo "<option value='$row4[id_vacuna]'>".$row4['tipo_vacuna']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
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





<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pasantía</title>
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="../../js/validacion.js"></script>
    <?php include_once('menu.php');
    include_once ('../../modelo/conexion.php');
    $obj=new conexion();
   
    $sql="select * from tipo_mascota join raza p on raza.id_tipo_mascota = p.id_tipo_mascota ";
    $sql="select * from tipo_mascota where id_tipo_mascota";
    $datos_raza=$obj->con_retorno($sql);
    ?>
</head>
<body>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i>Raza</h1>
            <p>Registro de Raza</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Raza</li>
            <li class="breadcrumb-item"><a href="#">Registro de Raza</a></li>
        </ul>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-7">
                <div class="tile">
                    <center><h3 class="tile-title">Crear Nueva Raza</h3></center>
                    <hr>
                    <div class="tile-body">
                        <form name="f1" action="../../enrutador/enr_raza.php" method="post" autocomplete="off" required> 
                            <div class="form-group row"><label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre:</label>
                            <div class="col-md-6"><input type="text" name="nombre" id="nombre" class="form-control" value="" maxlength="25" required autofocus onkeypress="return sololetras(event);"></div></div>
                            <div class="form-group row"><label for="tipo_mascota" class="col-md-4 col-form-label text-md-right">tipo mascotA:</label>
                                <div class="col-md-6">
                                    <select class="custom-select" name="tipo_mascota" required>
                                        <option value="" disabled selected hidden>Nada Seleccionado</option>
                                        <?php
                                        while ($row4=mysqli_fetch_assoc($datos_raza)){
                                            echo "<option value='$row4[id_tipo_mascota]'>".$row4['nombre']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            
                            <hr>
                            <div class="form-group row" style="text-align:center"><div class="col-md-4">
                                    <button type="submit" class="btn btn-outline-primary" name="registrar">
                                        <span class="glyphicon glyphicon-log-in"></span> Registrar
                                    </button>
                                </div>
                                <div class ="col-md-4"><button type="reset" class="btn btn-dark">
                                        <span class="glyphicon glyphicon-pencil"></span>Limpiar
                                    </button></div>
                                <div class ="col-md-4"><a class="btn btn-danger" href="listar_raza.php">Cancelar
                                    </a></div>
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
