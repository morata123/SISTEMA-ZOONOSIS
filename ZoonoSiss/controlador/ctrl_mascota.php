
<?php

require("../modelo/mdl_mascota.php");

class ctrl_mascota{
        public $obj_mod;

        public function __construct(){
            $this->obj_mod=new mdl_mascota();
        }
        public function insertar($p)
        {
            $this->obj_mod->set("id_mascota",$p["id_mascota"]);
            $this->obj_mod->set("nombre",$p["nombre"]);
            $this->obj_mod->set("fecha_nac",$p["fecha_nac"]);
            $this->obj_mod->set("especie",$p["especie"]);
            $this->obj_mod->set("sexo",$p["sexo"]);
            $this->obj_mod->set("color",$p["color"]);
            $this->obj_mod->set("tipo_pelo",$p["tipo_pelo"]);
            $this->obj_mod->set("imagen",$p["imagen"]);
            $this->obj_mod->set("fecha_registro",$p["fecha_registro"]);
            $this->obj_mod->set("id_raza",$p["id_raza"]);
            $this->obj_mod->set("id_centro",$p["id_centro"]);
            $this->obj_mod->set("id_senas_particulares",$p["id_senas_particulares"]);
            $this->obj_mod->set("id_grado_peligro",$p["id_grado_peligro"]);
            $this->obj_mod->set("id_vacuna",$p["id_vacuna"]);
            $this->obj_mod->insertar();
        }
        public function insertarmascota($n)
        {	switch ($n['rol']) {
            case '1':
                    $this->obj_mod->set("id_mascota",$p["id_mascota"]);
                    $this->obj_mod->set("nombre",$p["nombre"]);
                    $this->obj_mod->set("fecha_nac",$p["fecha_nac"]);
                    $this->obj_mod->set("especie",$p["especie"]);
                    $this->obj_mod->set("sexo",$p["sexo"]);
                    $this->obj_mod->set("color",$p["color"]);
                    $this->obj_mod->set("tipo_pelo",$p["tipo_pelo"]);
                    $this->obj_mod->set("imagen",$p["imagen"]);
                    $this->obj_mod->set("fecha_registro",$p["fecha_registro"]);
                    $this->obj_mod->set("id_raza",$p["id_raza"]);
                    $this->obj_mod->insertar_raza();
                break;
            case '2':
                    $this->obj_mod->set("id_mascota",$p["id_mascota"]);
                    $this->obj_mod->set("nombre",$p["nombre"]);
                    $this->obj_mod->set("fecha_nac",$p["fecha_nac"]);
                    $this->obj_mod->set("especie",$p["especie"]);
                    $this->obj_mod->set("sexo",$p["sexo"]);
                    $this->obj_mod->set("color",$p["color"]);
                    $this->obj_mod->set("tipo_pelo",$p["tipo_pelo"]);
                    $this->obj_mod->set("imagen",$p["imagen"]);
                    $this->obj_mod->set("fecha_registro",$p["fecha_registro"]);
                    $this->obj_mod->set("id_raza",$p["id_raza"]);
                    $this->obj_mod->set("id_centro",$p["id_centro"]);
                    $this->obj_mod->insertar_centro();
    
                 break;
    
            
            default:
                # code...
                break;
        }
        
        public function listar_dato($dato)
        {
                $this->obj_mod->set("id_mascota",$dato);
        
                $resp=$this->obj_mod->listar_dato();
        
                return $resp;
        }
        public function listar()
        {
            return $this->obj_mod->listar();
        }
        
        public function modificar($p){
            $this->obj_mod->set("nombre",$p['nombre']);
            $this->obj_mod->set("fecha_nac",$p['fecha_nac']);
            $this->obj_mod->set("especie",$p['especie']);
            $this->obj_mod->set("sexo",$p['sexo']);
            $this->obj_mod->set("color",$p['color']);
            $this->obj_mod->set("tipo_pelo",$p['tipo_pelo']);
            $this->obj_mod->set("imagen",$p['imagen']);
            $this->obj_mod->set("fecha_registro",$p['fecha_registro']);
            $this->obj_mod->set("id_raza",$p['id_raza']);
            $this->obj_mod->set("id_centro",$p['id_centro']);
            $this->obj_mod->set("id_senas_particulares",$p['id_senas_particulares']);
            $this->obj_mod->set("id_grado_peligro",$p['id_grado_peligro']);
            $this->obj_mod->set("id_vacuna",$p['id_vacuna']);
            $this->obj_mod->set("id_mascota",$p['id_mascota']);
            $this->obj_mod->modificar();
        }
    public function eliminar($id_mascota){
        $this->obj_mod->Eliminar($id_mascota);
    }
}
?>