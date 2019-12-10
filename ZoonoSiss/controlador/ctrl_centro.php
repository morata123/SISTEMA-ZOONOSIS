<?php

require("../modelo/mdl_centro.php");

class ctrl_estudio{
    public $obj_mod;

    public function __construct(){
        $this->obj_mod=new mdl_estudio();
    }

    public function insertar($p){
        print_r($p);
        $this->obj_mod->set("nombre" ,$p['nombre']);
        $this->obj_mod->set("descripcion" ,$p['descripcion']);
        $this->obj_mod->set("direccion" ,$p['direccion']);
        $this->obj_mod->set("telefono" ,$p['telefono']);
        $this->obj_mod->set("celular" ,$p['celular']);
        $this->obj_mod->set("email" ,$p['email']);
        $this->obj_mod->set("web" ,$p['web']);
        $this->obj_mod->insertar();
    }
    public function modificar($p){
        $this->obj_mod->set("nombre" ,$p['nombre']);
        $this->obj_mod->set("descripcion" ,$p['descripcion']);
        $this->obj_mod->set("direccion" ,$p['direccion']);
        $this->obj_mod->set("telefono" ,$p['telefono']);
        $this->obj_mod->set("celular" ,$p['celular']);
        $this->obj_mod->set("email" ,$p['email']);
        $this->obj_mod->set("web" ,$p['web']);
        $this->obj_mod->set("id_centro" ,$p['id_centro']);
        $this->obj_mod->modificar();
    }
    public function eliminar($id){
        $this->obj_mod->eliminar($id);
    }
}
