<?php
require("conexion.php");
class mdl_estudio
{
    public $id_centro;
    public $nombre;
    public $descripcion;
    public $direccion;
    public $telefono;
    public $celular;
    public $email;
    public $web;
    public $obj_con;

    function __construct()
    {
        $this->id_centro = 0;
        $this->nombre = "";
        $this->descripcion = "";
        $this->direccion = "";
        $this->telefono = 0;
        $this->celular = 0;
        $this->email = "";
        $this->web = "";
        $this->obj_con = new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function insertar()
    {
        $sql = "INSERT INTO datos_centro (nombre,descripcion,direccion,telefono,celular,email,web) VALUE ('$this->nombre','$this->descripcion', '$this->direccion', '$this->telefono', '$this->celular', '$this->email', '$this->web');";
        $this->obj_con->sin_retorno($sql);

    }
    public function modificar()
    {
        $sql="UPDATE datos_centro SET nombre='$this->nombre', descripcion='$this->descripcion' , direccion='$this->direccion'  , telefono='$this->telefono' , celular='$this->celular' , email='$this->email' , web='$this->web' where id_centro='$this->id_centro'";
        $this->obj_con->sin_retorno($sql);

    }

    public function listar()
    {
        $sql = "SELECT * FROM datos_centro where  id_centro ;";
        return $this->obj_con->con_retorno($sql);
    }
    public function eliminar($id)
    {
        $sql = "delete from datos_centro  where id_centro=$id;";
        $this->obj_con->sin_retorno($sql);


    }
}