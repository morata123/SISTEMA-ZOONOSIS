<?php include_once "menu.php";
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Solicitud Adopcion</h1>
            <p>Modificación de Solicitud Adopcion</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item active"><a href="#">Modificar Solicitud Adopcion</a></li>
            <li class="breadcrumb-item active"><a href="#">Modificar</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-title">Modificación de Solicitud Adopcion</div>
                <div class="tile-body">
                    <form action="../../enrutador/enr_adopcion.php" method="post">
                    <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="tipo_vivienda">tipo_vivienda</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="tipo_vivienda" id="tipo_vivienda" value="<?php echo $_GET['tipo_vivienda'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="descripcion">descripcion</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="descripcion" id="descripcion" value="<?php echo $_GET['descripcion'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="fecha_solicitud">fecha_solicitud</label></div>
                            <div class="col-md-10"><input class="form-control" type="date" name="fecha_solicitud" id="fecha_solicitud" value="<?php echo $_GET['fecha_solicitud'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="nombre_solicitante">nombre_solicitante</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="nombre_solicitante" id="nombre_solicitante" value="<?php echo $_GET['nombre_solicitante'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="ci_solicitante">ci_solicitante</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="ci_solicitante" id="ci_solicitante" value="<?php echo $_GET['ci_solicitante'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="id_mascota">id_mascota:</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="id_mascota" id="id_mascota" value="<?php echo $_GET['id_mascota'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" hidden for="id_adopcion">id_adopcion:</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" hidden name="id_adopcion" id="id_adopcion" value="<?php echo $_GET['id_adopcion'];?>"></div>
                        </div>
                        <div class="tile-footer row">
                            <div class="col-md-3">
                                <button class="btn btn-outline-success" type="submit" name="modificar">Modificar</button>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-danger" href="index.php">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>