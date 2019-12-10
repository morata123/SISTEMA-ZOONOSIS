<?php
require("conexion.php");
class mdl_pasoplantilla
{
    public $numeropasoplantilla;
    public $duracion;
    public $nombrepasoplantilla;
    public $obj_con;
    function __construct()
    {
        $this->id_requisito=0;
        $this->nombre="";
        $this->obj_con=new conexion();
    }
    public function set($atributo, $valor)
    {
        $this->$atributo=$valor;

    }

    public function insertar_paso()
    {
        $sql="insert into paso_plantilla (numeropasoplantilla,duracion,nombrepasoplantilla) value ('$this->numeropasoplantilla','$this->duracion','$this->nombrepasoplantilla')";
        $this->obj_con->sin_retorno($sql);
    }
    public function  listar_paso(){
        $sql="select * from paso_plantilla";
        return $this->obj_con->con_retorno($sql);
    }
}