<?php
require("../controlador/ctrl_mascota.php");
$obj=new ctrl_mascota();

if (isset($_POST["registrar"])) {
	$obj->insertar_persona($_POST);
}
elseif (isset($_POST["modificar"])){
    $obj->modificar($_POST);
    echo "<script> window.location.href='../admin/docs/listar_mascota.php';</script>";
} elseif (isset($_GET["id_mascota"])){
    $obj->eliminar($_GET["id_mascota"]);
    echo "<script> window.location.href='../admin/docs/listar_mascota.php';</script>";
}