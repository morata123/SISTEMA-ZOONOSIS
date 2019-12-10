<?php
require("../controlador/ctrl_tipo.php");
$obj=new ctrl_estudio();

if (isset($_POST['registrar'])){
    $obj->insertar($_POST);
    echo "<script> window.location.href='../admin/docs/listar_tipo.php';</script>";
}
elseif (isset($_POST['modificar'])){
    $obj->modificar($_POST);
    echo "<script> window.location.href='../admin/docs/listar_tipo.php';</script>";

} elseif (isset($_GET['id_tipo_mascota'])){
    $obj->eliminar($_GET['id_tipo_mascota']);
    echo "<script> window.location.href='../admin/docs/listar_tipo.php';</script>";
}