<?php
require("conexion.php");
class mdl_estudio
{
    public $id_Carrera;
    public $nombre;
    public $modalidad;
    public $version;
    public $obj_con;

    function __construct()
    {
        $this->id_Carrera = 0;
        $this->nombre = "";
        $this->modalidad = "";
        $this->version = 0;
        $this->obj_con = new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function insertar()
    {
        $sql = "INSERT INTO carrera (nombrecarrera,modalidad,version,activocarrera) VALUE ('$this->nombre','$this->modalidad', '$this->version',1);";
        $this->obj_con->sin_retorno($sql);

    }
    public function modificar()
    {
        $sql="UPDATE carrera SET nombrecarrera='$this->nombre', modalidad='$this->modalidad' , version='$this->version'  where id_Carrera='$this->id_Carrera'";
        $this->obj_con->sin_retorno($sql);

    }

    public function listar()
    {
        $sql = "SELECT * FROM carrera where activocarrera=1 order BY id_Carrera ;";
        return $this->obj_con->con_retorno($sql);
    }
    public function eliminar($id)
    {
        $sql = "UPDATE carrera SET activocarrera=0 where id_Carrera=$id;";
        $this->obj_con->sin_retorno($sql);
    }
}