
    <?php
    include_once ('../../modelo/conexion.php');
    include_once("menu.php");
    $ob=new conexion();
    $sql="select * from estudiante
  join persona p2 on estudiante.persona_id_persona = p2.id_persona
join pasantia p on estudiante.id_estudiante = p.estudiante_id_estudiante where activopasantia =1 and activoestudiante=1 and  estadopasantia=2";
    $tra=$ob->con_retorno($sql);
    ?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> Notas</h1>
            <p>Registro de Notas</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Notas</li>
            <li class="breadcrumb-item"><a href="#">Registro de Notas</a></li>
        </ul>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <center><h3 class="tile-title">Subir Nota</h3></center>
                    <hr>
                    <div class="tile-body">
                        <form name="f1" action="../../enrutador/enr_nota.php" method="post" autocomplete="off" required>
                            <div  class="form-group row"><label for="modalidad" class="col-md-4 col-form-label text-md-right">Estudiante:</label><div class="col-md-6">
                                    <select id="estudiante" name="id_estudiante" class="selectpicker" data-show-subtext="true" data-live-search="true" required>
                                        <option value="" style="display: none">Nada Seleccionado</option>
                                        <?php
                                        while ($datos=mysqli_fetch_assoc($tra))
                                        {
                                            echo "<option value='$datos[id_estudiante]'>$datos[nombre] $datos[papelldio] $datos[sapellido]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row"><label for="notasupervisor" class="col-md-4 col-form-label text-md-right">Nota supervisor:</label><div class="col-md-6"><input type="tel" name="notasupervisor" id="notasupervisor" class="form-control" value="" min="1" max="100" maxlength="2" required autofocus></div></div>

                            <div class="form-group row"><label for="notatutor" class="col-md-4 col-form-label text-md-right">Nota Tutor:</label><div class="col-md-6"><input type="tel" name="notatutor" id="notatutor" class="form-control" value="" min="1" max="100" maxlength="2" required autofocus onkeypress="return solonumeros(event);"></div></div>
                            <hr>
                            <div class="form-group row" style="text-align:center"><div class="col-md-4">
                                    <button type="submit" class="btn btn-outline-primary" name="registrar">
                                        <span class="glyphicon glyphicon-log-in"></span> Registrar
                                    </button>
                                </div>
                                <div class ="col-md-4"><button type="reset" class="btn btn-dark">
                                        <span class="glyphicon glyphicon-pencil"></span>Limpiar
                                    </button></div>
                                <div class ="col-md-4"><a class="btn btn-danger" href="index.php">Cancelar
                                    </a></div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

