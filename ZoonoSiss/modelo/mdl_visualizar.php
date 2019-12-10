<?php
require("conexion.php");

class mdl_visualizar
{
    public $conec;


    function __construct()
    {
        $this->conec = new conexion();
    }
    //esto esta en desarrollo no existe la tabla
   public function ver(){
        $sql="select valor from estado";
       return $this->conec->con_retorno($sql);
    }
}