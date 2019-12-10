<?php
include_once('menu.php');
include_once ('../../modelo/mdl_visualizar.php');


?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i>Usuario</h1>
            <p>Registro Cuenta</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Cuenta</li>
            <li class="breadcrumb-item"><a href="#">Registro Cuenta</a></li>
        </ul>
    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="col-md-12 row"><input type="text" id="numero" value="<?php echo $valor;?>"></div>
                    <div class="col-md-12 row"><input type="text" id="cont" ></div>
                    <div class="col-md-12 row"  id="uno"><img src="imagenes/tramites/1.png" width="100" height="100"></div>
                    <div class="col-md-12 row" id="dos"><img src="imagenes/tramites/2.PNG"  width="100" height="100"></div>
                    <div class="col-md-12 row" id="tres" ><img src="imagenes/tramites/3.png" width="100" height="100"></div>
                    <div class="col-md-12 row" id="cuatro"><img src="imagenes/tramites/4.png" width="100" height="100"></div>
                    <div class="col-md-12 row" id="cinco"><img src="imagenes/tramites/5.png"  width="100" height="100"></div>
                    <div class="col-md-12 row" id="seis" ><img src="imagenes/tramites/6.png" width="100" height="100"></div>
                    <div class="col-md-12 row" id="siete"><img src="imagenes/tramites/7.png"  width="100" height="100"></div>
                </div>
            </div>
        </div>
</main>
<script rel="script" src="../../js/visualizar.js"></script>