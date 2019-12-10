<?php include_once "menu.php";
include_once ('../../modelo/mdl_rol.php');
$obju=new mdl_rol();
$da=$obju->listar();

?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i>Roles</h1>
            <p>Asignacion de Rol</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item active"><a href="vst_rol1.php">asignacion Roles</a></li>
            <li class="breadcrumb-item active"><a href="modal-modificar-rol.php">Asignacion Roles</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-title">Asignacion de Roles</div>
                <div class="tile-body">
                    <form action="../../enrutador/enr_agregarusuario.php" method="post">
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="nombre">nombre</label></div>
                            <div class="col-md-10"><select name="nombre" id="nombre" class="custom-select">
                                    <?php
                                    while($row=mysqli_fetch_assoc($da)){
                                        echo "<option>".$row['nombre']."</option>";
                                    }?>
                                </select></div>

                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" for="id_persona">id persona</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="id_persona" id="id_persona" value="<?php echo $_GET['id_persona'];?>"></div>
                        </div>
                        <div class="tile-footer row">
                            <div class="col-md-3">
                                <button class="btn btn-success" type="submit" name="asignar">Asignar</button>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-danger" href="vst_rol1.php">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>