<?php 
require("../modelo/mdl_rol.php");
class ctrl_rol
{
	public $objeto_modelo;

	function __construct()
	{
		$this->objeto_modelo=new mdl_rol();
	}


public function insertar($p)
{
	$this->objeto_modelo->set("nombre",$p["nombre"]);

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("id_rol",$eli );
	$this->objeto_modelo->eliminar();
}


public function modificar($P)
{
	$this->objeto_modelo->set("id_rol",$P["id_rol"] );
	$this->objeto_modelo->set("nombre",$P["nombre"] );

	$this->objeto_modelo->modificar();
}

}

?>