<?php
require("../modelo/mdl_pasoplantilla.php");
class ctrl_pasoplantilla
{
    public $obj_mod;

    function __construct()
    {
        $this->obj_mod = new mdl_pasoplantilla();
    }

    public function insertar_paso($n)
    {
        $this->obj_mod->set("numeropasoplantilla", $n["numeropasoplantilla"]);
        $this->obj_mod->set("duracion", $n["duracion"]);
        $this->obj_mod->set("nombrepasoplantilla", $n["nombrepasoplantilla"]);

        $this->obj_mod->insertar_paso();

        echo "<script> window.location.href='../admin/docs/tramites.php';</script>";

    }
    public function listar_paso(){
        return $this->obj_mod->listar_paso();
    }
}