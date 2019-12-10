<?php 
include_once ('../../modelo/conexion.php');
$con=new conexion();
$sql="select * from carrera where activocarrera=1";
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
            <h1><i class="fa fa-edit"></i> Carrera</h1>
            <p>Registro Carreras</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Carreras</li>
            <li class="breadcrumb-item"><a href="#">Registro Carrera</a></li>
        </ul>
    </div>
    <div class="container">

        <div class="row">
            <div class="form-group row">
            <div class="col-md-6">
                <div class="tile">
                    <center><h3 class="tile-title">Nueva Carrera</h3></center>
                    <hr>
                    <div class="tile-body">
                        <form name="f1" action="../../enrutador/enr_estudio.php" method="post" autocomplete="off" required>
                            <div class="form-group row"><label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre:</label><div class="col-md-6"><input type="text" name="nombre" id="nombre" class="form-control" value="" maxlength="25" required autofocus onkeypress="return sololetras(event);"></div></div>

                             <div  class="form-group row"><label for="modalidad" class="col-md-4 col-form-label text-md-right">Modalidad:</label>
                                 <div class="col-md-6">
                                     <select class="custom-select" name="modalidad"  id="modalidad">
                                        <option>Semestral</option>
                                        <option>Anualizado</option>
                                     </select>
                                 </div>
                             </div>

                             <div  class="form-group row"><label for="version" class="col-md-4 col-form-label text-md-right">Version:</label>
                                 <div class="col-md-6">
                                     <select class="custom-select" name="version"  id="version">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
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



                <div class="col-md-6">
                    <div class="tile">
                        <center><h3 class="tile-title">Carrera Disponibles</h3></center>
                        <hr>
                        <div class="tile-body">
                            <?php
                            while ($row=mysqli_fetch_assoc($datos)) {
                                echo "<div class='form-group row'>
                            <div class='col-md-12'>
                            
                           <center> <p class='form-control'>$row[nombrecarrera]</p></center>

                                
                            </div>
                                
                            </div>";
                            }


                            ?>
                        </div>

                    </div>
                </div>





        </div>
        </div>
    </div>

</main>
</body>
</html>
