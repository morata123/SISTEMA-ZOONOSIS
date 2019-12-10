<?php include_once "menu.php";
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Estudia</h1>
            <p>Modificación de Carrera</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item active"><a href="listar_roles.php">Modificar Carrera</a></li>
            <li class="breadcrumb-item active"><a href="modal-modificar-rol.php">Modificar</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-title">Modificacion de Carrera</div>
                <div class="tile-body">
                    <form action="../../enrutador/enr_estudio.php" method="post">
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="nombre">Nombre</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $_GET['nombre'];?>"></div>

                        </div>

                        <div  class="form-group row"><label for="modalidad" class="col-md-2 col-form-label text-md-right">Regimen:</label><div class="col-md-10">
                                             <select class="custom-select" name="modalidad"  id="modalidad">
                                                <option>Anual</option>
                                                <option>Semestral</option>
                                             </select>
                                         </div>
                             </div>

                         <div  class="form-group row"><label for="version" class="col-md-2 col-form-label text-md-right">version:</label><div class="col-md-10">
                                             <select class="custom-select" name="version"  id="version">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                             </select>
                                         </div>
                             </div>

                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" hidden for="id_carrera">id carrera</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" hidden name="id_carrera" id="id_carrera" value="<?php echo $_GET['id_carrera'];?>"></div>
                        </div>
                        <div class="tile-footer row">
                            <div class="col-md-3">
                                <button class="btn btn-success" type="submit" name="modificar">Modificar</button>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-danger" href="listar_carrera.php">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>