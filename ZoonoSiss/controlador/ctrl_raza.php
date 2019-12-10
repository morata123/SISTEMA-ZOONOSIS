<?php

require("../modelo/mdl_raza.php");

class ctrl_raza{
        public $obj_mod;

        public function __construct(){
            $this->obj_mod=new mdl_raza();
        }
        public function insertar($p)
        {
            $this->obj_mod->set("id_raza",$p["id_raza"]);
            $this->obj_mod->set("nombre",$p["nombre"]);
            $this->obj_mod->insertar();
        }
        public function listar_dato($dato)
        {
                $this->obj_mod->set("id_raza",$dato);
        
                $resp=$this->obj_mod->listar_dato();
        
                return $resp;
        }
        public function listar()
        {
            return $this->obj_mod->listar();
        }
        
        public function modificar($p){
            $this->obj_mod->set("nombre",$p['nombre']);
            $this->obj_mod->set("id_raza",$p['id_raza']);
            $this->obj_mod->modificar();
        }
    public function eliminar($id_raza){
        $this->obj_mod->Eliminar($id_raza);
    }
}
?>