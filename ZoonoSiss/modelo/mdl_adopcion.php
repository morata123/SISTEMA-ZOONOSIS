<?php
require("conexion.php");
class mdl_adopcion
{
    public $id_adopcion;
    public $tipo_vivienda;
    public $descripcion;
    public $fecha_solicitud;
    public $nombre_solicitante;
    public $ci_solicitante;
    public $id_mascota = 0;
    public $obj_con;

    function __construct()
    {
        $this->id_adopcion = 0;
        $this->tipo_vivienda = "";
        $this->descripcion = "";
        $this->fecha_solicitud = "";
        $this->nombre_solicitante = "";
        $this->ci_solicitante = "";
        $this->id_mascota = 0;
        $this->obj_con = new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
    public function insertar()
    {
        $sql="insert into solicitud_adopcion (tipo_vivienda,descripcion,fecha_solicitud,nombre_solicitante,ci_solicitante,id_mascota) value ('$this->tipo_vivienda','$this->descripcion','$this->fecha_solicitud','$this->nombre_solicitante','$this->ci_solicitante','$this->id_mascota')";
        $this->obj_con->sin_retorno($sql);
    }
   
    public function modificar()
    {
        $sql="UPDATE solicitud_adopcion SET tipo_vivienda='$this->tipo_vivienda',descripcion='$this->descripcion',fecha_solicitud='$this->fecha_solicitud',nombre_solicitante='$this->nombre_solicitante',ci_solicitante='$this->ci_solicitante',id_mascota='$this->id_mascota' where id_adopcion='$this->id_adopcion'";
        $this->obj_con->sin_retorno($sql);
      
    }

	public function listar_dato()
	{
			$sql="select * from solicitud_adopcion where id_adopcion='$this->id_adopcion' ";
			$resp=$this->obj_con->con_retorno($sql);
			return $resp;
    }
    
    public function listar()
    {
        $sql="select * from solicitud_adopcion";
        return $this->obj_con->con_retorno($sql);
    }
    public function Eliminar($id_adopcion)
    {
        $sql = "delete from solicitud_adopcion  where id_adopcion=$id_adopcion;";
        $this->obj_con->sin_retorno($sql);
    }
    public function get_combo_modalidad(){
        $sql="SELECT * FROM solicitud_adopcion ORDER BY tipo_vivienda ASC";
                        
                return $this->obj_con->con_retorno($sql);
        }
    
}