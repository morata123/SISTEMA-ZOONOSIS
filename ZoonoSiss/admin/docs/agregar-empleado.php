        <script type="text/javascript" src="../../js/validacion.js"></script>
    <?php include_once('menu.php');
    include_once('../../modelo/mdl_rol.php');
    $obj=new mdl_rol();
    $datos=$obj->listar();
    ?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i>Usuario</h1>
            <p>Registro Personas</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Usuario</li>
            <li class="breadcrumb-item"><a href="#">Registro Persona</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <center><h3>Registrar Persona</h3></center>
                    </div>
                    <form name="f1" action="../../enrutador/enr_agregarusuario.php" method="post" autocomplete="off">
                    <div class="card-body">
                            <div class="form-group row"><label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre:</label><div class="col-md-6"><input type="text" name="nombre" id="nombre" class="form-control" value="" required autofocus onkeypress="return sololetras(event);" maxlength="15"></div></div>
                            <div class="form-group row"><label for="papellido" class="col-md-4 col-form-label text-md-right" >Primer apellido:</label><div class="col-md-6"><input type="text" name="papellido" id="papellido" class="form-control" value="" required onkeypress="return sololetras(event);" maxlength="15"></div></div>
                            <div class="form-group row"><label for="sapellido" class="col-md-4 col-form-label text-md-right" >Segundo apellido:</label><div class="col-md-6"><input type="text" name="sapellido" id="sapellido" value="" class="form-control" onkeypress="return sololetras(event);" maxlength="15"></div></div>
                            <div class="form-group row"><label for="ci" class="col-md-4 col-form-label text-md-right">DNI - C.I - Pasaporte:</label><div class="col-md-6"><input type="text" name="ci" id="ci" value="" required class="form-control" onkeypress="return dni(event);" maxlength="12"></div></div>
                            <div class="form-group row"><label for="telefono" class="col-md-4 col-form-label text-md-right">Telefono:</label><div class="col-md-6"><input value="" type="tel" name="telefono" id="telefono" class="form-control"  required onpaste="return false" onkeypress="return numeros(event);" maxlength="11"></div></div>
                            <div class="form-group row"><label for="direccion" class="col-md-4 col-form-label text-md-right">Direccion:</label><div class="col-md-6"><input type="text" name="direccion" id="direccion" value="" required class="form-control" onkeypress="return dirreccion(event);" maxlength="150"></div></div>
                            <div class="form-group row"><label for="email" class="col-md-4 col-form-label text-md-right">Email:</label><div class="col-md-6"><input  type="email" name="email" id="email" value="" required class="form-control" onkeypress="return correo(event);" maxlength="30"></div></div>
                             <div class="form-group row"><label for="rol" class="col-md-4 col-form-label text-md-right">Rol:</label><div class="col-md-6">
                                             <select class="custom-select" name="rol" id="rol" onchange ="labores()">
                                                 <option value="" disabled selected hidden>Nada Seleccionado</option>
                                                 <?php
                                                 while ($row=mysqli_fetch_assoc($datos)){
                                                     echo "<option value='$row[id_rol]'>".$row['nombrerol']."</option>";
                                                  }
                                                 ?>
                                             </select>
                                         </div>
                             </div>
                               <div id="pru" class="form-group row" style="display: none"><label for="cargo" class="col-md-4 col-form-label text-md-right">Cargo</label><div class="col-md-6">
                                             <select class="custom-select" name="cargo"  id="cargo">
                                                 <option value="" disabled selected hidden>Nada Seleccionado</option>
                                                 
                                                 <option>Jefe de Carrera</option>
                                                 <option>Jefe de Registros Inscripciones</option>
                                                 <option>Encargado Empresa</option>
                                             </select>
                                         </div>
                               </div>

                                <div id="prue" class="form-group row" style="display: none"><label for="carrera" class="col-md-4 col-form-label text-md-right">Carrera</label><div class="col-md-6">
                                        <select class="custom-select" name="carrera"  id="carrera">
                                            <option value="" disabled selected hidden>Nada Seleccionado</option>
                                            <?php
                                            while ($row=mysqli_fetch_assoc($datos_carrera)){
                                                echo "<option value='$row[id_carrera]'>".$row['nombrecarrera']."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                    </div>
                        <div class="card-footer">
                           <div class="form-group row" style="text-align:center">
                               <div class="col-md-4">
                                    <button type="submit" class="btn btn-outline-primary" name="registrar">
                                        <span class="glyphicon glyphicon-log-in"></span> Registrar
                                    </button>
                                </div>
                                <div class ="col-md-4"><button type="reset" class="btn btn-dark">
                                        <span class="glyphicon glyphicon-pencil"></span>Limpiar
                                    </button>
                                </div>
                                <div class ="col-md-4"><a class="btn btn-danger" href="index.php">Cancelar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    function labores()
    {
        var lab=document.getElementById("rol").value;
        if (lab==2) {
        var cargo=document.getElementById("pru").style.display='';}
        else
        {
            var cargo=document.getElementById("pru").style.display='none';
        }
         if (lab==3) {
             var carrera=document.getElementById("prue").style.display='';}
         else
         {
             var carrera=document.getElementById("prue").style.display='none';
         }
    }
</script>
<?php
if(@$_SESSION['error']=="emailduplicado"){
    echo "<script>
iziToast.error({
    title: 'Error',
    message: 'El correo ya esta en uso' +
     'Utilize otro',
});
</script>";
    @$_SESSION['error']="";
}

?>