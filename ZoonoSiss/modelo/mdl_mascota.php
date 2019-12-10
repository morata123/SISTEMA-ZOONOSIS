<?php
require("conexion.php");
class mdl_mascota
{
    public $id_mascota;
    public $nombre;
    public $fecha_nac;
    public $especie;
    public $sexo;
    public $color;
    public $tipo_pelo;
    public $imagen;
    public $fecha_registro;
    public $id_raza = 0;
    public $id_centro = 0;
    public $id_senas_particulares = 0;
    public $id_grado_peligro = 0;
    public $id_vacuna = 0;
    public $obj_con;

    function __construct()
    {
        $this->id_mascota = 0;
        $this->nombre = "";
        $this->fecha_nac = "";
        $this->especie = "";
        $this->sexo = "";
        $this->color = "";
        $this->tipo_pelo = "";
        $this->imagen = "";
        $this->fecha_registro = "";
        $this->id_raza = 0;
        $this->id_centro = 0;
        $this->id_senas_particulares = 0;
        $this->id_grado_peligro = 0;
        $this->id_vacuna = 0;
        $this->obj_con = new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
    
    
    public function insertar_raza()
    {
        $sql = "select * from registro_mascota where nombre='$this->nombre'";
        $resp = $this->obj_con->con_retorno($sql);
        if ($resp == "") {
            $_SESSION['error'] = "nombreduplicado";
            echo "<script> window.location.href='../admin/docs/crear_mascota.php';</script>";
        } else {
            //echo $this->nombre;
            $sql="insert into registro_mascota (nombre,fecha_nac,especie,sexo,color,tipo_pelo,imagen,fecha_registro,id_raza) value ('$this->nombre','$this->fecha_nac','$this->especie','$this->sexo','$this->color','$this->tipo_pelo','$this->imagen','$this->fecha_registro','$this->id_raza')";
            $this->obj_con->sin_retorno($sql);
            $sql1 = "select * from registro_mascota where nombre='$this->nombre'";
            $numeromascota = $this->obj_con->con_retorno($sql1);
            $num = mysqli_fetch_assoc($numeromascota);
            echo "<script> window.location.href='../admin/docs/listar_mascota.php?c=$num[id_mascota]';</script>";
        }
    }
    public function insertar_centro()
    {
        $sql = "select * from registro_mascota where nombre='$this->nombre'";
        $resp = $this->obj_con->con_retorno($sql);
        if ($resp == "") {
            $_SESSION['error'] = "nombreduplicado";
            echo "<script> window.location.href='../admin/docs/crear_mascota.php';</script>";
        } else {
            //echo $this->nombre;
            $sql="insert into registro_mascota (nombre,fecha_nac,especie,sexo,color,tipo_pelo,imagen,fecha_registro,id_raza) value ('$this->nombre','$this->fecha_nac','$this->especie','$this->sexo','$this->color','$this->tipo_pelo','$this->imagen','$this->fecha_registro','$this->id_raza')";
            $this->obj_con->sin_retorno($sql);
            $sql1 = "select * from registro_mascota where nombre='$this->nombre'";
            $numeromascota = $this->obj_con->con_retorno($sql1);
            $num = mysqli_fetch_assoc($numeromascota);
            echo "<script> window.location.href='../admin/docs/listar_mascota.php?c=$num[id_mascota]';</script>";
        }
    }
    public function modificar()
    {
        $sql="UPDATE registro_mascota SET nombre='$this->nombre',fecha_nac='$this->fecha_nac',especie='$this->especie',sexo='$this->sexo',color='$this->color',tipo_pelo='$this->tipo_pelo',imagen='$this->imagen',fecha_registro='$this->fecha_registro',id_raza='$this->id_raza',id_centro='$this->id_centro',id_senas_particulares='$this->id_senas_particulares',id_grado_peligro='$this->id_grado_peligro',id_vacuna='$this->id_vacuna' where id_mascota='$this->id_mascota'";
        $this->obj_con->sin_retorno($sql);
      
    }

	public function listar_dato()
	{
			$sql="select * from registro_mascota where id_mascota='$this->id_mascota' ";
			$resp=$this->obj_con->con_retorno($sql);
			return $resp;
    }
    
    public function listar()
    {
        $sql="select * from registro_mascota";
        return $this->obj_con->con_retorno($sql);
    }
    public function Eliminar($id_mascota)
    {
        $sql = "delete from registro_mascota  where id_mascota=$id_mascota;";
        $this->obj_con->sin_retorno($sql);
    }
    public function get_combo_modalidad(){
        $sql="SELECT * FROM registro_mascota ORDER BY nombre ASC";
                        
                return $this->obj_con->con_retorno($sql);
        }
    
}