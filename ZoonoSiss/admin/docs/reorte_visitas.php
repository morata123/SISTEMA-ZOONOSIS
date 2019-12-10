<?php 
include_once ('../../modelo/conexion.php');
$con=new conexion();

$sql="select * from persona where rol_id_rol=3";
$datos_empleado=$con->con_retorno($sql);

 ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
            <h1><i class="fa fa-edit"></i> Reporte</h1>
            <p>Reporte  Visita</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Visita</li>
            <li class="breadcrumb-item"><a href="#">Reporte con  Visitas</a></li>
        </ul>
    </div>
    <div class="container">

        <div class="row">
            <div class="form-group row">
            <div class="col-md-12">
                <div class="tile">
                    <center><h3 class="tile-title">Reporte con  Visitas</h3></center>
                    <hr>
                    <div class="tile-body">
                        <form name="f1" action="rep_visitas.php" method="post" autocomplete="off" required>
                            <div class="form-group row"><label for="empresa" class="col-md-4 col-form-label text-md-right">Estudiante:</label>
                                <div class="col-md-7">
                                    <select class="custom-select" name="tutor" required>
                                        <option value="" disabled selected hidden>Nada Seleccionado</option>
                                        <?php
                                        while ($row=mysqli_fetch_assoc($datos_empleado)){
                                            echo "<option value=$row[id_persona]>".$row['nombre']." ".$row['papellido']." ".$row['papellido']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row" style="text-align:center"><div class="col-md-4">
                                    <button type="submit" class="btn btn-outline-primary" name="generar">
                                        <span class="glyphicon glyphicon-log-in"></span> Generar
                                    </button>
                                </div>
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
