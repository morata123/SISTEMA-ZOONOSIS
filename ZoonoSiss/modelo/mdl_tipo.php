<?php
require("conexion.php");
class mdl_estudio
{
    public $id_tipo_mascota;
    public $nombre;
    public $obj_con;

    function __construct()
    {
        $this->id_tipo_mascota = 0;
        $this->nombre = "";
        $this->obj_con = new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function insertar()
    {
        $sql = "INSERT INTO tipo_mascota (nombre) VALUE ('$this->nombre');";
        $this->obj_con->sin_retorno($sql);

    }
    public function modificar()
    {
        $sql="UPDATE tipo_mascota SET nombre='$this->nombre' where id_tipo_mascota='$this->id_tipo_mascota'";
        $this->obj_con->sin_retorno($sql);

    }

    public function listar()
    {
        $sql = "SELECT * FROM tipo_mascota where  id_tipo_mascota ;";
        return $this->obj_con->con_retorno($sql);
    }
    public function eliminar($id)
    {
        $sql = "delete from tipo_mascota  where id_tipo_mascota=$id;";
        $this->obj_con->sin_retorno($sql);


    }
}