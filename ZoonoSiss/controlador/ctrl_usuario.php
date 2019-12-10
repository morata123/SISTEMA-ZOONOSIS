<?php

require("../modelo/mdl_usuario.php");
class ctrl_usuario
{  public $obj_mod;
	
	function __construct()
	{
		$this->obj_mod=new mdl_usuario();
	}

	public function insertar_cliente($n){
		$this->obj_mod->set("nombre", $n["nombre"]);
        $this->obj_mod->set("papellido", $n["papellido"]);
        $this->obj_mod->set("sapellido", $n["sapellido"]);
        $this->obj_mod->set("ci", $n["ci"]);
        $this->obj_mod->set("telefono", $n["telefono"]);
        $this->obj_mod->set("direccion", $n["direccion"]);
        $this->obj_mod->set("email", $n["email"]);
        $this->obj_mod->insertar_cliente();
//echo "<script> window.location.href='../vista/vst_registrar_login.php';</script>";
	}
	public function buscar_id(){
			return	$this->obj_mod->buscar_id();

	}
}


?>