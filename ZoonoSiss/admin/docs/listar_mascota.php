<?php
include_once('menu.php');
include_once ('../../modelo/mdl_mascota.php');
$objeto=new mdl_mascota();
$datos=$objeto->listar();
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Registro Mascota</h1>
            <p>Listado de Registro Mascota registrados en el sistema</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Raza</li>
            <li class="breadcrumb-item active"><a href="crear_mascota.php">Tabla Raza</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="thead-dark">
                        <tr>
                            
                            <th>nombre</th>
                            <th>fech_nac</th>
                            <th>especie</th>
                            <th>sexo</th>
                            <th>color</th>
                            <th>tip_pelo</th>
                            <th>imagen</th>
                            <th>fech_regis</th>
                            <th>raza</th>
                            <th>centro</th>
                            <th>señas</th>
                            <th>peligro</th>
                            <th>vacuna</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row=mysqli_fetch_assoc($datos)){
                            echo "<tr>";
                            echo "<td hidden>".$row['id_mascota']."</td>";
                            echo "<td>".$row['nombre']."</td>";
                            echo "<td>".$row['fecha_nac']."</td>";
                            echo "<td>".$row['especie']."</td>";
                            echo "<td>".$row['sexo']."</td>";
                            echo "<td>".$row['color']."</td>";
                            echo "<td>".$row['tipo_pelo']."</td>";
                            echo "<td>".$row['imagen']."</td>";
                            echo "<td>".$row['fecha_registro']."</td>";
                            echo "<td>".$row['id_raza']."</td>";
                            echo "<td>".$row['id_centro']."</td>";
                            echo "<td>".$row['id_senas_particulares']."</td>";
                            echo "<td>".$row['id_grado_peligro']."</td>";
                            echo "<td>".$row['id_vacuna']."</td>";
                            $id_mascota=$row['id_mascota'];
                            $nombre=$row['nombre'];
                            $fecha_nac=$row['fecha_nac'];
                            $especie=$row['especie'];
                            $sexo=$row['sexo'];
                            $color=$row['color'];
                            $tipo_pelo=$row['tipo_pelo'];
                            $imagen=$row['imagen'];
                            $fecha_registro=$row['fecha_registro'];
                            $id_raza=$row['id_raza'];
                            $id_centro=$row['id_centro'];
                            $id_senas_particulares=$row['id_senas_particulares'];
                            $id_grado_peligro=$row['id_grado_peligro'];
                            $id_vacuna=$row['id_vacuna'];
                            echo "<td><a class='btn btn-danger col-md-5' href='../../enrutador/enr_mascota.php?id_mascota=".$id_mascota."'><i class='fa fa-trash-o' aria-hidden='true'></i></a>
                            <a class=' btn btn-success col-md-5' href='modificar_mascota.php?id_mascota=".$id_mascota."&nombre=".$nombre."&fecha_nac=".$fecha_nac."&especie=".$especie."&sexo=".$sexo."&color=".$color."&tipo_pelo=".$tipo_pelo."&imagen=".$imagen."&fecha_registro=".$fecha_registro."&id_raza=".$id_raza."&id_centro=".$id_centro."&id_senas_particulares=".$id_senas_particulares."&id_grado_peligro=".$id_grado_peligro."&id_vacuna=".$id_vacuna."'><i class='fa fa-cog' aria-hidden='true'></i></a></td>";
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