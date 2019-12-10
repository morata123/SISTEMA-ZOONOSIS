<?php
include_once ('menu.php');
include_once ('../../modelo/mdl_login.php');
$objeto=new mdl_login();
$datos=$objeto->listar_inhabilitados();
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Usuarios</h1>
            <p>Listado de Usuarios inhabilitados</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Cuenta</li>
            <li class="breadcrumb-item active"><a href="agregar-empleado.php">Personas</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Habilitar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row=mysqli_fetch_assoc($datos)){
                            echo "<tr>";
                            // echo "<td>".$row['id_persona']."</td>";
                            echo "<td style='text-transform: capitalize'>".$row['nombre']."</td>";
                            echo "<td style='text-transform: capitalize'>".$row['papellido']."</td>";
                            echo "<td style='text-transform: capitalize'>".$row['sapellido']."</td>";
                            echo "<td>".$row['email']."</td>";
                            $id_persona=$row['id_persona'];
                            $paterno=$row['papellido'];
                            $materno=$row['sapellido'];
                            $email=$row['email'];
                            echo "<td><a class='btn btn-success col-md-5'  href='../../modelo/mdl_habilitar.php?id_persona=".$id_persona."'><i class='fa fa-check-circle' aria-hidden='true'></i></a>
                            </td>";
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