<?php
include_once('menu.php');
?>
<head>
    <!-- Open Graph Meta-->
    <title>Perfil Usuario</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="app sidebar-mini rtl">
<!-- Navbar-->

<!-- Sidebar menu-->
<main class="app-content">
    <div class="row user">
        <div class="col-md-12">
            <div class="profile">
                <div class="info"><img class="user-img" src="../../logo/apple-icon.png">
                    <h4>Zoonosis</h4>
                </div>
                <div class="cover-image"></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="tile p-0">
                <ul class="nav flex-column nav-tabs user-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Ver Perfil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Modificar</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane active" id="user-timeline">
                    <div class="tile user-settings">
                        <h4 class="line-head">Modificar Perfil</h4>
                        <form>
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label>Nombre:</label>
                                    <input class="form-control" type="text" value="<?php echo $_SESSION['nombre']?>">
                                </div>
                                <div class="col-md-4">
                                    <label>Apellidos:</label>
                                    <input class="form-control" type="text" value="<?php echo $_SESSION['papellido']." ".$_SESSION['sapellido']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 mb-4">
                                    <label>C.I:</label>
                                    <input class="form-control" type="text" value="<?php echo $_SESSION['ci']?>">
                                </div>

                                <div class="col-md-8 mb-4">
                                    <label>Correo:</label>
                                    <input class="form-control" type="text" value="<?php echo $_SESSION['email']?>">
                                </div>

                                <div class="col-md-8 mb-4">
                                    <label>Teléfono:</label>
                                    <input class="form-control" type="text" value="<?php echo $_SESSION['telefono']?>"
                                </div>

                                <div class="col-md-8 mb-4">
                                    <label>Dirección:</label>
                                    <input class="form-control" type="text" value="<?php echo $_SESSION['direccion']?>">
                                </div>

                                <div class="col-md-8 mb-4">
                                    <label>Home Phone</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="row mb-12">
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i> Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="user-settings">
                    <div class="tile user-settings">
                        <h4 class="line-head">Modificar Perfil</h4>
                        <form>
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label>First Name</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="col-md-4">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 mb-4">
                                    <label>Email</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-8 mb-4">
                                    <label>Mobile No</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-8 mb-4">
                                    <label>Office Phone</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-8 mb-4">
                                    <label>Home Phone</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="row mb-10">
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i> Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>