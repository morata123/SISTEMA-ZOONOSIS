<?php
require("../controlador/ctrl_usuario.php");
$obj=new ctrl_usuario();

if (isset($_POST["suscripcion"])) {
	$obj->insertar_cliente($_POST);
	echo "<script> window.location.href='../vista/vst_registrar_login.php';</script>";
}

?>