<?php
require("../controlador/ctrl_raza.php");
$obj=new ctrl_raza();

if (isset($_POST["registrar"])){
    $obj->insertar($_POST);
    echo "<script> window.location.href='../admin/docs/listar_raza.php';</script>";
}
elseif (isset($_POST["modificar"])){
    $obj->modificar($_POST);
    echo "<script> window.location.href='../admin/docs/listar_raza.php';</script>";
} elseif (isset($_GET["id_raza"])){
    $obj->eliminar($_GET["id_raza"]);
    echo "<script> window.location.href='../admin/docs/listar_raza.php';</script>";
}