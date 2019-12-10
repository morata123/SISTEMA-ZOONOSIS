<?php include_once "menu.php";

?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i>Persona</h1>
            <p>Modificacion de Persona</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item active"><a href="#">Listar Persona</a></li>
            <li class="breadcrumb-item active"><a href="#">Modificar Persona</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-title">Modificacion de Persona</div>
                <div class="tile-body">
                    <form action="../../enrutador/enr_agregarusuario.php" method="post" autocomplete="off" required>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="nombre">Nombre</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $_GET['nombre'];?>"></div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="papellido">Papellido</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="papellido" id="papellido" value="<?php echo $_GET['papellido'];?>"></div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="sapellido">Sapellido</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="sapellido" id="sapellido" value="<?php echo $_GET['sapellido'];?>"></div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="ci">CI</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="ci" id="ci" value="<?php echo $_GET['ci'];?>"></div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="telefono">Telefono</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="telefono" id="telefono" value="<?php echo $_GET['telefono'];?>"></div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="direccion">Direccion</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="direccion" id="direccion" value="<?php echo $_GET['direccion'];?>"></div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="email">Email</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="email" id="email" value="<?php echo $_GET['email'];?>"></div>

                        </div>

                        <div class="tile-footer row">
                            <div class="col-md-3">
                                <button class="btn btn-success" type="submit" name="modificar">Modificar</button>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-danger" href="listar_roles.php">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>