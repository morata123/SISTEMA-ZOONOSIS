<?php
include_once('menu.php');
include_once ('../../modelo/mdl_adopcion.php');
$objeto=new mdl_adopcion();
$datos=$objeto->listar();
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Solicitud Adopcion</h1>
            <p>Listado de Solicitud Adopcion registrados en el sistema</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Solicitud Adopcion</li>
            <li class="breadcrumb-item active"><a href="crear_adopcion.php">Tabla Solicitud Adopcion</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="thead-dark">
                        <tr>
                            <th>tipo_vivienda</th>
                            <th>descripcion</th>
                            <th>fecha_solicitud</th>
                            <th>nombre_solicitante</th>
                            <th>ci_solicitante</th>
                            <th>mascota</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row=mysqli_fetch_assoc($datos)){
                            echo "<tr>";
                            echo "<td hidden>".$row['id_adopcion']."</td>";
                            echo "<td>".$row['tipo_vivienda']."</td>";
                            echo "<td>".$row['descripcion']."</td>";
                            echo "<td>".$row['fecha_solicitud']."</td>";
                            echo "<td>".$row['nombre_solicitante']."</td>";
                            echo "<td>".$row['ci_solicitante']."</td>";
                            echo "<td>".$row['id_mascota']."</td>";
                            $id_adopcion=$row['id_adopcion'];
                            $tipo_vivienda=$row['tipo_vivienda'];
                            $descripcion=$row['descripcion'];
                            $fecha_solicitud=$row['fecha_solicitud'];
                            $nombre_solicitante=$row['nombre_solicitante'];
                            $ci_solicitante=$row['ci_solicitante'];
                            $id_mascota=$row['id_mascota'];
                            echo "<td><a class='btn btn-danger col-md-5' href='../../enrutador/enr_adopcion.php?id_adopcion=".$id_adopcion."'><i class='fa fa-trash-o' aria-hidden='true'></i></a>
                            <a class=' btn btn-success col-md-5' href='modificar_adopcion.php?id_adopcion=".$id_adopcion."&tipo_vivienda=".$tipo_vivienda."&descripcion=".$descripcion."&fecha_solicitud=".$fecha_solicitud."&nombre_solicitante=".$nombre_solicitante."&ci_solicitante=".$ci_solicitante."&id_mascota=".$id_mascota."'><i class='fa fa-cog' aria-hidden='true'></i></a></td>";
                            echo "</tr>";
                        }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Essential javascripts for application to work-->

<!-- The javascript plugin to display page loading on top-->
<!-- Page specific javascripts-->
<!-- Data table plugin-->
<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
<!-- Google analytics script-->
<script type="text/javascript">
    if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }
</script>