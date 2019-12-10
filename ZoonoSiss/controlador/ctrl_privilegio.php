<?php
include_once ('../modelo/mdl_privilegio.php');
$obj=new mdl_privilegio();
class ctrl_privilegio{
    public $obj_mod;

    function __construct()
    {
        $this->obj_mod = new mdl_privilegio();
    }
    public function insertar($n){
        $this->obj_mod->set("nombrefuncionalidad", $n["privilegio"]);
        $this->obj_mod->insertar();
        echo "<script> window.location.href='../admin/docs/menu.php';</script>";
    }
}