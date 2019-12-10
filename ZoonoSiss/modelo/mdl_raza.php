<?php
require("conexion.php");
class mdl_raza
{
    public $id_raza;
    public $nombre;
    public $obj_con;

    function __construct()
    {
        $this->id_raza = 0;
        $this->nombre = "";
        $this->obj_con = new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
    public function insertar()
    {
        $sql="insert into raza (nombre) value ('$this->nombre')";
        $this->obj_con->sin_retorno($sql);
    }
   
    public function modificar()
    {
        $sql="UPDATE raza SET nombre='$this->nombre where id_raza='$this->id_raza'";
        $this->obj_con->sin_retorno($sql);
      
    }

	public function listar_dato()
	{
			$sql="select * from raza where id_raza='$this->id_raza' ";
			$resp=$this->obj_con->con_retorno($sql);
			return $resp;
    }
    
    public function listar()
    {
        $sql="select * from raza";
        return $this->obj_con->con_retorno($sql);
    }
    public function Eliminar($id_raza)
    {
        $sql = "delete from raza  where id_raza=$id_raza;";
        $this->obj_con->sin_retorno($sql);
    }
    public function get_combo_modalidad(){
        $sql="SELECT * FROM raza ORDER BY nombre ASC";
                        
                return $this->obj_con->con_retorno($sql);
        }
    
}