<?php
require("conexion.php");
class mdl_estudio
{
    public $id_grado_peligro;
    public $nombre;
    public $obj_con;

    function __construct()
    {
        $this->id_grado_peligro = 0;
        $this->nombre = "";
        $this->obj_con = new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function insertar()
    {
        $sql = "INSERT INTO grado_peligro (nombre) VALUE ('$this->nombre');";
        $this->obj_con->sin_retorno($sql);

    }
    public function modificar()
    {
        $sql="UPDATE grado_peligro SET nombre='$this->nombre' where id_grado_peligro='$this->id_grado_peligro'";
        $this->obj_con->sin_retorno($sql);

    }

    public function listar()
    {
        $sql = "SELECT * FROM grado_peligro where  id_grado_peligro ;";
        return $this->obj_con->con_retorno($sql);
    }
    public function eliminar($id)
    {
        $sql = "delete from grado_peligro  where id_grado_peligro=$id;";
        $this->obj_con->sin_retorno($sql);


    }
}