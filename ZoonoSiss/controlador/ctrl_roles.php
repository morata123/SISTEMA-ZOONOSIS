<?php 
require("../modelo/mdl_roles.php");
class rol{

	public $obj;

	function __construct(){
		$this->obj=new mdlrol();
	}

	public function listar_roles(){
		return $this->obj->listar_roles();
	}
}

?>