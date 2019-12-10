<?php include_once "menu.php";

?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i>Roles</h1>
            <p>Modificacion de Rol</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item active"><a href="listar_roles.php">Listar Roles</a></li>
            <li class="breadcrumb-item active"><a href="modal-modificar-rol.php">Modificar Roles</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-title">Modificacion de Roles</div>
                <div class="tile-body">
                    <form action="../../enrutador/enr_rol.php" method="post">
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="nombre">nombre</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $_GET['nombre'];?>"></div>

                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="id_rol">id rol</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="id_rol" id="id_rol" value="<?php echo $_GET['id_rol'];?>"></div>
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