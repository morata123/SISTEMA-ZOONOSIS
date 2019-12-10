<?php
require("../controlador/ctrl_centro.php");
$obj=new ctrl_estudio();

if (isset($_POST['registrar'])){
    $obj->insertar($_POST);
    echo "<script> window.location.href='../admin/docs/listar_centro.php';</script>";
}
elseif (isset($_POST['modificar'])){
    $obj->modificar($_POST);
    echo "<script> window.location.href='../admin/docs/listar_centro.php';</script>";

} elseif (isset($_GET['id_centro'])){
    $obj->eliminar($_GET['id_centro']);
    echo "<script> window.location.href='../admin/docs/listar_centro.php';</script>";
}