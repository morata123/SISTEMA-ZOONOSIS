<?php
require("../controlador/ctrl_pasoplantilla.php");
$obj=new ctrl_pasoplantilla();

if (isset($_POST["insertarpaso"])) {
    $obj->insertar_paso($_POST);
}
