<?php
require("../controlador/ctrl_adopcion.php");
$obj=new ctrl_adopcion();

if (isset($_POST["registrar"])){
    $obj->insertar($_POST);
    echo "<script> window.location.href='../admin/docs/listar_adopcion.php';</script>";
}
elseif (isset($_POST["modificar"])){
    $obj->modificar($_POST);
    echo "<script> window.location.href='../admin/docs/listar_adopcion.php';</script>";
} elseif (isset($_GET["id_adopcion"])){
    $obj->eliminar($_GET["id_adopcion"]);
    echo "<script> window.location.href='../admin/docs/listar_adopcion.php';</script>";
}