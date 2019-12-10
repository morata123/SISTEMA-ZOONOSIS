<?php

require("../modelo/mdl_grado.php");

class ctrl_estudio{
    public $obj_mod;

    public function __construct(){
        $this->obj_mod=new mdl_estudio();
    }

    public function insertar($p){
        print_r($p);
        $this->obj_mod->set("nombre" ,$p['nombre']);
        $this->obj_mod->insertar();
    }
    public function modificar($p){
        $this->obj_mod->set("nombre" ,$p['nombre']);
        $this->obj_mod->set("id_grado_peligro" ,$p['id_grado_peligro']);
        $this->obj_mod->modificar();
    }
    public function eliminar($id){
        $this->obj_mod->eliminar($id);
    }
}
