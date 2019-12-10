<?php 
require("conexion.php");

class mdl_rol
{
	public $id_rol;
	public $nombre;
	public $conec;


	function __construct()
	{
	$this->id_rol=0;
	$this->nombre="";
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		$sql="insert into rol (nombrerol)
		value ('$this->nombre',1)";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM rol ORDER BY nombrerol ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from rol where id_rol='$this->id_rol'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato($v)
	{
			$sql="select * from rol where id_rol='$v'; ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE rol SET nombrerol='$this->nombre' where id_rol='$this->id_rol'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_rol1.php");

		</script>
	 <?php
	}
	public function listar_carrera(){
	    $sql="select * from carrera where activocarrera=1";
	    return $this->conec->con_retorno($sql);
    }

}

?>