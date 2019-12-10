<?php
require("../controlador/ctrl_estudio.php");
$obj=new ctrl_estudio();

if (isset($_POST['registrar'])){
    $obj->insertar($_POST);
    echo "<script> window.location.href='../admin/docs/listar_carrera.php';</script>";
}
elseif (isset($_POST['modificar'])){
    $obj->modificar($_POST);
    echo "<script> window.location.href='../admin/docs/listar_carrera.php';</script>";

} elseif (isset($_GET['id_carrera'])){
    $obj->eliminar($_GET['id_carrera']);
    echo "<script> window.location.href='../admin/docs/listar_carrera.php';</script>";
}