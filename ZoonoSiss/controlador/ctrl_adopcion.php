<?php

require("../modelo/mdl_adopcion.php");

class ctrl_adopcion{
        public $obj_mod;

        public function __construct(){
            $this->obj_mod=new mdl_adopcion();
        }
        public function insertar($p)
        {
            $this->obj_mod->set("id_adopcion",$p["id_adopcion"]);
            $this->obj_mod->set("tipo_vivienda",$p["tipo_vivienda"]);
            $this->obj_mod->set("descripcion",$p["descripcion"]);
            $this->obj_mod->set("fecha_solicitud",$p["fecha_solicitud"]);
            $this->obj_mod->set("nombre_solicitante",$p["nombre_solicitante"]);
            $this->obj_mod->set("ci_solicitante",$p["ci_solicitante"]);
            $this->obj_mod->set("id_mascota",$p["id_mascota"]);
            $this->obj_mod->insertar();
        }
        public function listar_dato($dato)
        {
                $this->obj_mod->set("id_adopcion",$dato);
        
                $resp=$this->obj_mod->listar_dato();
        
                return $resp;
        }
        public function listar()
        {
            return $this->obj_mod->listar();
        }
        
        public function modificar($p){
            $this->obj_mod->set("tipo_vivienda",$p['tipo_vivienda']);
            $this->obj_mod->set("descripcion",$p['descripcion']);
            $this->obj_mod->set("fecha_solicitud",$p['fecha_solicitud']);
            $this->obj_mod->set("nombre_solicitante",$p['nombre_solicitante']);
            $this->obj_mod->set("ci_solicitante",$p['ci_solicitante']);
            $this->obj_mod->set("id_mascota",$p['id_mascota']);
            $this->obj_mod->set("id_adopcion",$p['id_adopcion']);
            $this->obj_mod->modificar();
        }
    public function eliminar($id_adopcion){
        $this->obj_mod->Eliminar($id_adopcion);
    }
}
?>