<?php include_once "menu.php";
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i>Datos Centro</h1>
            <p>Modificación Datos Centro</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item active"><a href="#">Modificar Datos Centro</a></li>
            <li class="breadcrumb-item active"><a href="#">Modificar</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-title">Modificacion Datos Centro</div>
                <div class="tile-body">
                    <form action="../../enrutador/enr_centro.php" method="post">
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="nombre">Nombre</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $_GET['nombre'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="descripcion">descripcion</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="descripcion" id="descripcion" value="<?php echo $_GET['descripcion'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="direccion">direccion</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="direccion" id="direccion" value="<?php echo $_GET['direccion'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="telefono">telefono</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="telefono" id="telefono" value="<?php echo $_GET['telefono'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="celular">celular</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="celular" id="celular" value="<?php echo $_GET['celular'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="email">email</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="email" id="email" value="<?php echo $_GET['email'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="web">web</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="web" id="web" value="<?php echo $_GET['web'];?>"></div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" hidden for="id_centro">id centro</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" hidden name="id_centro" id="id_centro" value="<?php echo $_GET['id_centro'];?>"></div>
                        </div>
                        <div class="tile-footer row">
                            <div class="col-md-3">
                                <button class="btn btn-success" type="submit" name="modificar">Modificar</button>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-danger" href="listar_centro.php">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>