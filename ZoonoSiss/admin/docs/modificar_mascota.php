<?php include_once "menu.php";
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Registro Mascota</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item active"><a href="#">Modificar Registro Mascota</a></li>
            <li class="breadcrumb-item active"><a href="#">Modificar</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-title">Modificación de Registro Mascota</div>
                <div class="tile-body">
                    <form action="../../enrutador/enr_mascota.php" method="post">
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="nombre">Nombre:</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $_GET['nombre'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="fecha_nac">fecha nac:</label></div>
                            <div class="col-md-10"><input class="form-control" type="date" name="fecha_nac" id="fecha_nac" value="<?php echo $_GET['fecha_nac'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="especie">especie:</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="especie" id="especie" value="<?php echo $_GET['especie'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="sexo">sexo:</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="sexo" id="sexo" value="<?php echo $_GET['sexo'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="color">color:</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="color" id="color" value="<?php echo $_GET['color'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="tipo_pelo">tipo_pelo:</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="tipo_pelo" id="tipo_pelo" value="<?php echo $_GET['tipo_pelo'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="imagen">imagen:</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="imagen" id="imagen" value="<?php echo $_GET['imagen'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="fecha_registro">fecha_regis:</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="fecha_registro" id="fecha_registro" value="<?php echo $_GET['fecha_registro'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="id_raza">id_raza:</label></div>
                            <div class="col-md-10"><input class="form-control" type="number" name="id_raza" id="id_raza" value="<?php echo $_GET['id_raza'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="id_centro">centro:</label></div>
                            <div class="col-md-10"><input class="form-control" type="number" name="id_centro" id="id_centro" value="<?php echo $_GET['id_centro'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="id_senas_particulares">señas:</label></div>
                            <div class="col-md-10"><input class="form-control" type="number" name="id_senas_particulares" id="id_senas_particulares" value="<?php echo $_GET['id_senas_particulares'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="id_grado_peligro">peligro:</label></div>
                            <div class="col-md-10"><input class="form-control" type="number" name="id_grado_peligro" id="id_grado_peligro" value="<?php echo $_GET['id_grado_peligro'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="id_vacuna">vacuna:</label></div>
                            <div class="col-md-10"><input class="form-control" type="number" name="id_vacuna" id="id_vacuna" value="<?php echo $_GET['id_vacuna'];?>"></div>
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