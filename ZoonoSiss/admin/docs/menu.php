<?php
session_start();
if($_SESSION['usuario']==""){
    echo "<script> window.location.href='page-login.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Centro de Mascotas</title>
    <link rel="icon" type="image/png" href="../../logo/apple-icon.gif"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
      <link rel="stylesheet" href="../../iziToast-master/dist/css/iziToast.min.css">
      <link rel="stylesheet" type="text/css" href="bootstrap4/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../../bootstrap4/css/bootstrap-select.css"/>
      <script src="js/sweetalert2.all.min.js"></script>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="../../js/validacion.js"></script>
  </head>
  <body class="app sidebar-mini rtl"  >
  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="index.php">Zoonosis</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu -->
      <ul class="app-nav">
          
          <!-- User Menu-->
          <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu" style='text-transform: capitalize'><i class="fa fa-user fa-lg"></i> &nbsp;<?php echo $_SESSION['rol']?></a>
              <ul class="dropdown-menu settings-menu dropdown-menu-right">
                  <li><a class="dropdown-item" href="perfil.php"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
                  <li><a class="dropdown-item" href="../../enrutador/enr_login.php?salir=true"><i class="fa fa-sign-out fa-lg"></i> Salir</a></li>
              </ul>
          </li>
      </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../../imagenes/userc.jpg" width="50" height="50" alt="User Image">
          <div>
              <p class="app-sidebar__user-name" style='text-transform: capitalize'><?php echo $_SESSION['nombre']?></p>
              <p class="app-sidebar__user-designation" style='text-transform: capitalize'><?php echo $_SESSION['papellido']?></p>
          </div>
      </div>
      <ul class="app-menu">
          <?php if ($_SESSION['rol']=='administrador') {?>
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Usuarios</span><i class="treeview-indicator fa fa-angle-right"></i></a>

              <ul class="treeview-menu" >
                  <li ><a class="treeview-item" href = "agregar-empleado.php" ><i class="icon fa fa-user-plus" ></i > Registrar Persona</a ></li >
                  <li ><a class="treeview-item" href = "table-personas.php" ><i class="icon fa fa-list" ></i > Listar Personas</a ></li >
                  <!-- <li ><a class="treeview-item" href = "listar_usuario.php" ><i class="icon fa fa-list" ></i > Listar Usuarios </a ></li > -->
                  <li ><a class="treeview-item" href = "listar_inhabilitados.php" ><i class="icon fa fa-list" ></i > Listar inhabilitados </a ></li >
              </ul >
          </li>
          <?php  }?>
         <!--    datos centro      -->
         <?php if ($_SESSION['rol']=='administrador') {?>
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-window-maximize"></i><span class="app-menu__label">Datos Centro</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                  <li><a class="treeview-item" href="crear_centro.php"><i class="icon fa fa-plus-square"></i>Crear Datos Centro</a></li>
                  <li><a class="treeview-item" href="listar_centro.php"><i class="icon fa fa-list"></i>Listar Datos Centro</a></li>
              </ul>
              <?php  }?>
          <!--    mascotas      -->
          <?php if ($_SESSION['rol']=='administrador') {?>
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-window-maximize"></i><span class="app-menu__label">Registro Mascotas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                  <li><a class="treeview-item" href="crear_raza.php"><i class="icon fa fa-plus-square"></i>Crear Raza</a></li>
                  <li><a class="treeview-item" href="listar_raza.php"><i class="icon fa fa-list"></i>Listar Raza</a></li>
                  <li><a class="treeview-item" href="crear_grado.php"><i class="icon fa fa-plus-square"></i>Crear Grado Peligro</a></li>
                  <li><a class="treeview-item" href="listar_grado.php"><i class="icon fa fa-list"></i>Listar Grado Peligro</a></li>
                  <li><a class="treeview-item" href="crear_mascota.php"><i class="icon fa fa-plus-square"></i>Crear Mascotas</a></li>
                  <li><a class="treeview-item" href="listar_mascota.php"><i class="icon fa fa-list"></i>Listar Mascotas</a></li>
                  
              </ul>
              <?php  }?>
              <!--    Adopcion   -->
              <?php if ($_SESSION['rol']=='administrador') {?>
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-industry"></i><span class="app-menu__label">Adopcion</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                  
                  <li><a class="treeview-item" href="crear_adopcion.php"><i class="icon fa fa-plus-square"></i>Crear Solicitud adopcion</a></li>
                  <li><a class="treeview-item" href="listar_adopcion.php"><i class="icon fa fa-list"></i>Listar Solicitudes</a></li>
                  

              </ul>
              <?php  }?>
           
          <ul class="treeview-menu">
            <?php if ($_SESSION['rol']=='administrador') {?>
          </ul>
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-newspaper-o"></i><span class="app-menu__label">Reportes</span><i class="treeview-indicator fa fa-angle-right"></i></a>

              <ul class="treeview-menu" >
                  <li ><a class="treeview-item" href = "reorte_tutor.php" ><i class="icon fa fa-list-alt" ></i > Reporte por raza</a ></li >
                  <li ><a class="treeview-item" href = "reorte_visitas.php" ><i class="icon fa fa-list-alt" ></i > Reporte sexo</a ></li >
                  <li ><a class="treeview-item" href = "reorte_empresa.php" ><i class="icon fa fa-list-alt" ></i > Reporte por peligrosidad</a ></li >
                  <li ><a class="treeview-item" href = "reorte_carrera.php" ><i class="icon fa fa-list-alt" ></i > Reporte por vacuna</a ></li >
              </ul >
          </li>
      <?php  }?>
          
      </ul>

    </aside>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="../../bootstrap4/js/bootstrap.js"></script>
    <script src="js/main.js"></script>
  <script src="../../bootstrap4/js/bootstrap-select.min.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
  <script src="../../iziToast-master/dist/js/iziToast.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
     // var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      //var lineChart = new Chart(ctxl).Line(data);
      
      //var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      //var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
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
  </body>
</html>