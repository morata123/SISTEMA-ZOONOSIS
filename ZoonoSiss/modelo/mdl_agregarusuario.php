<?php
@session_start();
require("conexion.php");
if (isset($_GET['id_persona']))
{
    $con= new conexion();
    $sql="update persona set activo =0 where id_persona='$_GET[id_persona]'";
    $con->sin_retorno($sql);
    $sql="update usuario set activousuario =0 where persona_id_persona='$_GET[id_persona]'";
    $con->sin_retorno($sql);
    $sql="delete from cuenta where usuario_id_usuario='$_GET[id_persona]'";
    $con->sin_retorno($sql);
    echo "<script> window.location.href='../admin/docs/table-personas.php';</script>";
}
else {
    class mdlusuario
    {
        private $id_persona;
        public $nombre;
        public $papellido;
        public $sapellido;
        public $ci;
        public $telefono;
        public $direccion;
        public $email;
        public $obj_con;
        public $rol;
        public $cargo;

        function __construct()
        {

            $this->id_persona = 0;
            $this->nombre = "";
            $this->papellido = "";
            $this->sapellido = "";
            $this->ci = 0;
            $this->telefono = 0;
            $this->direccion = "";
            $this->email = "";
            $this->rol = 0;
            $this->cargo = "";
            $this->obj_con = new conexion();
        }

        public function set($atributo, $valor)
        {
            $this->$atributo = $valor;

        }

        public function insertar_administrador()
        {
            $sql = "select * from persona where email='$this->email'";
            $resp = $this->obj_con->con_retorno($sql);
            if ($resp == "") {
                $_SESSION['error'] = "emailduplicado";
                echo "<script> window.location.href='../admin/docs/agregar-empleado.php';</script>";
            } else {
                //echo $this->nombre;
                $sql = "insert into persona(nombre,papellido,sapellido,ci,telefono,direccion, email,rol_id_rol,activo) values('$this->nombre','$this->papellido','$this->sapellido', '$this->ci','$this->telefono','$this->direccion', '$this->email', '$this->rol',1);";
                $this->obj_con->sin_retorno($sql);
                $sql1 = "select * from persona where ci='$this->ci'";
                $numeropersona = $this->obj_con->con_retorno($sql1);
                $num = mysqli_fetch_assoc($numeropersona);
                $sql2 = "insert into empleado(persona_id_persona,cargo,activoempleado) values('$num[id_persona]','administrador','1')";
                $this->obj_con->sin_retorno($sql2);
                echo "<script> window.location.href='../admin/docs/imprimir_cuenta.php?c=$num[id_persona]';</script>";
            }
        }

        public function insertar_personal()
        {
            $sql = "select * from persona where email='$this->email'";
            $resp = $this->obj_con->con_retorno($sql);
            if ($resp == "") {
                $_SESSION['error'] = "emailduplicado";
                echo "<script> window.location.href='../admin/docs/agregar-empleado.php';</script>";
            } else {
                //echo $this->nombre;
                $sql = "insert into persona(nombre,papellido,sapellido,ci,telefono,direccion, email,rol_id_rol,activo) values('$this->nombre','$this->papellido','$this->sapellido', '$this->ci','$this->telefono','$this->direccion', '$this->email','$this->rol',1);";
                $this->obj_con->sin_retorno($sql);
                $sql1 = "select * from persona where ci='$this->ci'";
                $numeropersona = $this->obj_con->con_retorno($sql1);
                $num = mysqli_fetch_assoc($numeropersona);
                $sql2 = "insert into empleado(persona_id_persona,cargo,activoempleado) values('$num[id_persona]','$this->cargo','1')";
                $this->obj_con->sin_retorno($sql2);
                echo "<script> window.location.href='../admin/docs/imprimir_cuenta.php?c=$num[id_persona]';</script>";
            }
        }

        public function insertar_estudiante()
        {
            $sql = "select * from persona where email='$this->email'";
            $resp = $this->obj_con->con_retorno($sql);
            if ($resp == "") {
                $_SESSION['error'] = "emailduplicado";
                echo "<script> window.location.href='../admin/docs/agregar-empleado.php';</script>";
            } else {
                //echo $this->nombre;
                $sql = "insert into persona(nombre,papellido,sapellido,ci,telefono,direccion, email,rol_id_rol,activo) values('$this->nombre','$this->papellido','$this->sapellido', '$this->ci','$this->telefono','$this->direccion', '$this->email','$this->rol',1);";
                $this->obj_con->sin_retorno($sql);
                $sql1 = "select * from persona where ci='$this->ci'";
                $numeropersona = $this->obj_con->con_retorno($sql1);
                $num = mysqli_fetch_assoc($numeropersona);
                $sql2 = "insert into estudiante (activoestudiante,enpasantia,persona_id_persona) values('1',0,'$num[id_persona]')";
                $this->obj_con->sin_retorno($sql2);
                echo "<script> window.location.href='../admin/docs/imprimir_cuenta.php?c=$num[id_persona]';</script>";
            }
        }

        public function listar()
        {
            $sql = "select * from persona where activo=1;";
            return $this->obj_con->con_retorno($sql);
        }

        public function buscar()
        {
            $sql = "select * from persona where id_persona='$this->id_persona';";
            return $this->obj_con->con_retorno($sql);
        }


        public function buscar_rol($no)
        {
            $sql = "select id_rol from rol WHERE nombrerol='$no'";
            return $this->obj_con->con_retorno($sql);
        }

        public function asignar($n, $i)
        {
            $sql = "update persona set rol_id_rol='$n' WHERE id_persona='$i';";
            $this->obj_con->sin_retorno($sql);
        }

        public function modificar()
        {
            $sql = "UPDATE persona SET nombre='$this->nombre', papellido='$this->papellido', sapellido='$this->sapellido', ci='$this->ci',telefono='$this->telefono',direccion='$this->direccion', rol='$this->rol' where id_persona='$this->id_persona';";
            //print_r($sql);
            return $this->obj_con->con_retorno($sql);
        }

        public function eliminar($v)
        {
            $sql = "delete from persona WHERE id_persona=$v;";
            $this->obj_con->sin_retorno($sql);
        }

        public function buscar_nombre_rol()
        {
            $sql = "select * from rol where nombrerol='estudio'";
            $this->obj_con->con_retorno($sql);
        }

        public function agregar_estudio($correo, $idcarrera)
        {
            $sql = "select id_estudiante,id_persona from persona join estudiante e on persona.id_persona = e.persona_id_persona
where email= '$correo' ";
            $iddatos = $this->obj_con->con_retorno($sql);
            $da = mysqli_fetch_assoc($iddatos);
            $sql = "insert into estudia (carrera_id_carrera,estudiante_id_estudiante,estudiante_persona_id_persona) values ($idcarrera,$da[id_estudiante],$da[id_persona])";
            $this->obj_con->sin_retorno($sql);
//        echo "'carrera'.$idcarrera";
//        echo "'estduiante'.$da[id_estudiante]";
//        echo "'persona'.$da[id_persona]";


        }

        public function buscar_persona($cor)
        {
            $sql = "select * from persona where activo=1 and id_persona=$cor";
            return $this->obj_con->con_retorno($sql);
        }
    }
}

?>
