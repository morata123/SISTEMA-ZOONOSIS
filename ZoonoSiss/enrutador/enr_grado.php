<?php
require("../controlador/ctrl_grado.php");
$obj=new ctrl_estudio();

if (isset($_POST['registrar'])){
    $obj->insertar($_POST);
    echo "<script> window.location.href='../admin/docs/listar_grado.php';</script>";
}
elseif (isset($_POST['modificar'])){
    $obj->modificar($_POST);
    echo "<script> window.location.href='../admin/docs/listar_grado.php';</script>";

} elseif (isset($_GET['id_grado_peligro'])){
    $obj->eliminar($_GET['id_grado_peligro']);
    echo "<script> window.location.href='../admin/docs/listar_grado.php';</script>";
}