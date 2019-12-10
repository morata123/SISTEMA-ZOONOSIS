<?php include_once "menu.php";
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i>grado de peligro</h1>
            <p>Modificación grado de peligro</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item active"><a href="#">Modificar grado de peligro</a></li>
            <li class="breadcrumb-item active"><a href="#">Modificar</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-title">Modificacion grado de peligro</div>
                <div class="tile-body">
                    <form action="../../enrutador/enr_grado.php" method="post">
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="nombre">Nombre</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $_GET['nombre'];?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" hidden for="id_grado_peligro">id centro</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" hidden name="id_grado_peligro" id="id_grado_peligro" value="<?php echo $_GET['id_grado_peligro'];?>"></div>
                        </div>
                        <div class="tile-footer row">
                            <div class="col-md-3">
                                <button class="btn btn-success" type="submit" name="modificar">Modificar</button>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-danger" href="listar_grado.php">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>