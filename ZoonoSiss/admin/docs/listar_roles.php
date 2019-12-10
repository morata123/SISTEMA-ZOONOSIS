<?php
include_once('menu.php');
include_once ('../../modelo/mdl_rol.php');

    $obj=new mdl_rol();
    $resp=$obj->listar();

?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Roles</h1>
            <p>Listado de Roles registrados en el sistema</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Roles</li>
            <li class="breadcrumb-item active"><a href="">Tabla Roles</a></li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="thead-dark">
                        <tr>
                            <th>Num</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $num=1;
                        while($row=mysqli_fetch_assoc($resp)){
                            $id_rol=$row["id_rol"];
                            $nombre=$row["nombrerol"];
                            echo "<tr>";
                            echo "<td>$num</td>";
                            echo "<td hidden>".$row["id_rol"]."</td>";
                            echo "<td>".$row["nombrerol"]."</td>";
                            echo "<td></td>";
                            $num+=1;
                            echo "</tr>";
                        }
                        ?>
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