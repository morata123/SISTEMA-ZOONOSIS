<?php
include_once('menu.php');
include_once ('../../modelo/mdl_login.php');
$objeto=new mdl_login();
$datos=$objeto->listar();
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Usuarios</h1>
            <p>Listado de Usuarios registrados en el sistema</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Usuarios</li>
            <li class="breadcrumb-item active"><a href="#">Tabla Usuarios</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="thead-dark">
                        <tr>
                            <th><b>ID Usuario</th>
                            <th>Usuario</th>
                            <th>ID Persona</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row=mysqli_fetch_assoc($datos)){
                            echo "<tr>";
                            echo "<td>".$row['id_usuario']."</td>";
                            echo "<td>".$row['usuario']."</td>";
                            echo "<td>".$row['persona_id_persona']."</td>";
                            $id_persona=$row['persona_id_persona'];
                            echo "<td><a class='btn btn-danger col-md-5' href='../../modelo/mdl_login.php?id_persona=".$id_persona."'><i class='fa fa-trash-o' aria-hidden='true'></i></a>
                            <a class=' btn btn-success col-md-5'><i class='fa fa-cog' aria-hidden='true'></i></a></td>";
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