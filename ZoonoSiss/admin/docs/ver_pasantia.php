<?php include_once('menu.php');
    include_once ('../../modelo/conexion.php');
    $id_pasantia= $_GET['id_pasantia'];
    $id_empleado= $_GET['id_empleado'];
    $obj=new conexion();
    $sql= "select * from pasantia join estudiante e on pasantia.estudiante_id_estudiante = e.id_estudiante join persona p on e.persona_id_persona = p.id_persona 
  join empresa e2 on pasantia.empresa_id_empresa = e2.id_empresa join asignatura a on pasantia.asignatura_id_asignatura = a.id_asignatura 
  join estudia e3 on e.id_estudiante = e3.estudiante_id_estudiante and e.persona_id_persona = e3.estudiante_persona_id_persona 
  join carrera c on e3.carrera_id_carrera = c.id_carrera where activopasantia=1 and id_pasantia=$id_pasantia";
    $datos_pasantia=$obj->con_retorno($sql);
    while ($row=mysqli_fetch_assoc($datos_pasantia)){
        $empresa=$row['nombreempresa'];
        $direccion=$row['direccionempresa'];
        $are=$row['area'];
        $estudiante=$row['nombre'];
        $papellido=$row['papellido'];
        $sapellido=$row['sapellido'];
        $ci=$row['ci'];
        $funciones=$row['funciones'];
        $carrera=$row['nombrecarrera'];
        $regimen=$row['modalidad'];
        $estado=$row['estadopasantia'];
        $observacionvisita=$row['observacionvisita'];
        $latitud=$row['latitud'];
        $longitud=$row['longitud'];
        $asignatura=$row['nombreasignatura'];
        $nivel=$row['nivel'];
    }

    $sql2= "select * from pasantia join empleado e on pasantia.empleado_id_empleado = e.id_empleado join persona p on e.persona_id_persona = p.id_persona where id_empleado=$id_empleado and id_pasantia=$id_pasantia and activopasantia=1";
    $datos_empleado=$obj->con_retorno($sql2);
    while ($row2=mysqli_fetch_assoc($datos_empleado))
    {
        $totur=$row2['nombre'];
        $tapellido=$row2['papellido'];
        $tapellido2=$row2['sapellido'];
        $cargo=$row2['cargo'];
    }
    $ao = date("Y" );
    ?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> Pasantias</h1>
            <p>Registro de Pasantías</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Pasantía</li>
            <li class="breadcrumb-item"><a href="#">Registro de Pasantías</a></li>
        </ul>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-7">
                <div class="tile">
                    <center><h3 class="tile-title">Datos Pasantía</h3></center>
                    <hr>
                    <div class="tile-body">
                        <form name="f1" action="#" method="post" autocomplete="off" required>
                            <div class="form-group row"><label for="empresa" class="col-md-4 col-form-label text-md-right">Empresa:</label><div class="col-md-6"><p class="form-control"><?php echo $empresa; ?></p></div></div>
                            <div class="form-group row"><label for="areas" class="col-md-4 col-form-label text-md-right">Area:</label><div class="col-md-6"><p class="form-control"><?php echo $are; ?></p></div></div>
                            <div class="form-group row"><label for="funciones" class="col-md-4 col-form-label text-md-right">Descripción:</label><div class="col-md-6"><textarea readonly name="funciones" id="funciones" cols="36" rows="4"><?php echo $funciones ?></textarea></div></div>
                            <div class="form-group row"><label for="ci" class="col-md-4 col-form-label text-md-right">Ci:</label><div class="col-md-6"><p class="form-control"><?php echo $ci; ?></p></div></div>
                            <div class="form-group row"><label for="estudiante" class="col-md-4 col-form-label text-md-right">Estudiante:</label><div class="col-md-6"><p class="form-control"><?php echo $estudiante." ".$papellido." ".$sapellido ?></p></div></div>
                            <div class="form-group row"><label for="carrera" class="col-md-4 col-form-label text-md-right">Carrera:</label><div class="col-md-6"><p class="form-control"><?php echo $carrera; ?></p></div></div>
                            <div class="form-group row"><label for="regimen" class="col-md-4 col-form-label text-md-right">Regimen:</label><div class="col-md-6"><p class="form-control"><?php echo $regimen; ?></p></div></div>
                            <div class="form-group row"><label for="tutor" class="col-md-4 col-form-label text-md-right">Tutor:</label><div class="col-md-6"><p class="form-control"><?php echo $totur." ".$tapellido." ".$tapellido2; ?></p></div></div>
                            <div class="form-group row"><label for="cargo" class="col-md-4 col-form-label text-md-right">Cargo:</label><div class="col-md-6"><p class="form-control"><?php echo $cargo; ?></p></div></div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-md-4"><div id="mapholder"></div></div>
                            </div>
                            <div class="form-group row" style="text-align:center">
                                <!-- <div class="col-md-4">
                                    <button type="submit" class="btn btn-outline-primary" name="registrar">
                                        <span class="glyphicon glyphicon-log-in"></span> Registrar
                                    </button>
                                </div>-->
                                <?php
                                    if ($estado=2)
                                    {
                                        echo "<div class ='col-md-6'><a class='btn btn-info col-md-4' href='ver_visita.php?latitud=".$latitud."&longitud=".$longitud."'>Ver Visita</a></div>";
                                    }
                                ?>

                                <div class ="col-md-4"><a class="btn btn-danger" href="listar_pasantia.php">Volver
                                    </a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://maps.google.com/maps/api/js?key=AIzaSyAUIE4qNC1oK13FQyhTP5NVzBIcrN7WMas"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
<script>
    var x = document.getElementById("demo");
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            x.innerHTML = "Generalización no soportada por el navegador.";
        }
    }

    function showPosition(position) {
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;
        var latlon = new google.maps.LatLng(lat, lon)
        var mapholder = document.getElementById('mapholder')
        var lat1 = document.getElementById('latitud')
        var lon1 = document.getElementById('longitud')
        mapholder.style.height= '15em';
        mapholder.style.width = '20em';

        lat1.setAttribute("value", lat);
        lon1.setAttribute("value", lon);

        var myOptions = {
            center:latlon,zoom:14,
            mapTypeId:google.maps.MapTypeId.ROADMAP,
            mapTypeControl:false,
            navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
        }

        var map = new google.maps.Map(document.getElementById("mapholder"), myOptions);
        var marker = new google.maps.Marker({position:latlon,map:map,title:"Estas aquí!"});
    }

    function showError(error) {
        switch(error.code) {
            case error.PERMISSION_DENIED:
                x.innerHTML = "Usuario denegó la solicitud de geolocalización."
                break;
            case error.POSITION_UNAVAILABLE:
                x.innerHTML = "La información de ubicación no está disponible."
                break;
            case error.TIMEOUT:
                x.innerHTML = "La solicitud para agotar el tiempo de espera de la ubicación del usuario."
                break;
            case error.UNKNOWN_ERROR:
                x.innerHTML = "Un error desconocido ocurrió."
                break;
        }
    }
</script>
