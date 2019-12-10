<?php
require("../controlador/ctrl_privilegio.php");
$obj=new ctrl_privilegio();
if (isset($_POST['registrar'])){
    $obj->insertar($_POST);

}