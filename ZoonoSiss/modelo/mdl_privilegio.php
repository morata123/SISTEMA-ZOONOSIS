<?php
require_once ('conexion.php');
class mdl_privilegio{
    public $nombrefuncionalidad;
    public $obj_con;

    function __construct(){
        $this->nombre="";
        $this->obj_con=new conexion();
    }

    public function set($atributo, $valor){
        $this->$atributo=$valor;
    }
    public function insertar(){
        $sql="insert into funcionalidad (nombrefuncionalidad) VALUE ('$this->$this->nombrefuncionalidad')";
        $this->obj_con->sin_retorno($sql);
}
public function listar(){
        $sql="select * from funcionalidad";
   return $this->obj_con->con_retorno($sql);
}

}