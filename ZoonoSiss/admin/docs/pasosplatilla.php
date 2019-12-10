<?php
include_once 'menu.php';
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i>Pasos</h1>
            <p>Creacion de Pasos</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item active"><a href="modal-modificar-rol.php">Crear Pasos</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-title">Creacion de Pasos
                </div>
                <div class="tile-body">
                </div>
                <div>
                    <form action="../../enrutador/enr_pasoplantilla.php"  method="post">
                        <div class="form-group row ">
                            <div class="col-md-3">
                                <label for="nombrepasoplantilla" class="col-form-label text-md-right">Nombre del Paso</label>
                            </div>
                            <div class="col-md-6">
                                <input id="nombrepasoplantilla" name="nombrepasoplantilla" type="text" class="form-control" value="" >
                            </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-md-3">
                                <label for="numeropasoplantilla" class="col-form-label text-md-right">Numero De Paso</label>
                            </div>
                            <div class="col-md-6">
                                <input id="numeropasoplantilla" name="numeropasoplantilla" type="number" class="form-control" value="" >
                            </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-md-3">
                                <label for="duracion" class="col-form-label text-md-right">Duracion &nbsp;<sub><i>En Dias</i></sub></label>
                            </div>
                            <div class="col-md-6">
                                <input id="duracion" name="duracion" type="number" class="form-control" value="" >
                            </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-success" name="insertarpaso" >Agregar</button>
                            </div>

                        <div class="col-md-3">
                            <a type="button" href="tramites.php" class="btn btn-danger" name="insertar" >Cancelar</a>
                        </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</main>











