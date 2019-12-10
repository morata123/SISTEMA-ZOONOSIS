<?php
require("../controlador/ctrl_login.php");
$obj=new ctrl_login();

if (isset($_POST['agregar'])){
$obj->insertar($_POST);
    echo "<script> window.location.href='../admin/docs/index.php';</script>";


}
elseif(isset($_POST['loguearse'])){
	$obj->validar_ingreso($_POST);
}
elseif(isset($_GET['salir'])){
	session_destroy();
	echo "<script> window.location.href='../admin/docs/page-login.php';</script>";

}

?>