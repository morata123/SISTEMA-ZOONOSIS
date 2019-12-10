<?php
@session_start();
$_SESSION['mensaje']=0;
require("conexion.php");
if (isset($_GET['id_persona']))
{
    $con= new conexion();
    $sql="update usuario set activousuario =0 where persona_id_persona='$_GET[id_persona]'";
    $con->sin_retorno($sql);
    $sql="update persona set activo=0 where id_persona =$_GET[id_persona]";
    $con->sin_retorno($sql);
    echo "<script> window.location.href='../admin/docs/listar_usuario.php';</script>";
}
else {
    class mdl_login
    {
        public $usuario;
        public $clave;
        public $id_per;
        public $rol;

        public $obj_con;

        function __construct()
        {

            $this->usuario = "";
            $this->clave = "";
            $this->id_per = 0;
            $this->rol = 0;

            $this->obj_con = new conexion();
        }

        public function set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }

        public function insertar()
        {
            $sql = "INSERT INTO usuario (usuario,clave,persona_id_persona,activousuario,fechacreacion) VALUES ('$this->usuario','$this->clave','$this->id_per',1,NOW());";
            $this->obj_con->sin_retorno($sql);
            $sql2 = "select * from usuario as u join persona p on u.persona_id_persona = p.id_persona
  join rol r on p.rol = r.id_rol join privilegios p2 on r.id_rol = p2.rol_id_rol join funcionalidad f
    on p2.funcionalidad_id_funcionalidad = f.id_funcionalidad where u.usuario='$this->usuario'";
            $r = $this->obj_con->con_retorno($sql2);
        }

        public function listar()
        {
            $sql = "select * from usuario where activousuario=1 ;";
            return $this->obj_con->con_retorno($sql);
        }

        public function buscar_correo()
        {
            $sql = "select * from persona where id_persona=(select max(id_persona) from persona);";
            return $this->obj_con->con_retorno($sql);
        }

        public function validar($u, $c)
        {
            $sql = "select * from usuario WHERE usuario ='$u' AND clave='$c';";
            if ($contenido = $this->obj_con->con_retorno($sql)) {
                $sql = "select * from persona
  join usuario u on persona.id_persona = u.persona_id_persona
  join rol r on persona.rol_id_rol = r.id_rol
  join privilegios p on r.id_rol = p.rol_id_rol
  join funcionalidad f on p.funcionalidad_id_funcionalidad = f.id_funcionalidad
 left join empleado e on persona.id_persona = e.persona_id_persona where usuario='$u'";
                $log = $this->obj_con->con_retorno($sql);
                $da = mysqli_fetch_assoc($log);
                $_SESSION['usuario'] = $da['usuario'];
                $_SESSION['rol'] = $da['nombrerol'];
                $_SESSION['nombre'] = $da['nombre'];
                $_SESSION['papellido'] = $da['papellido'];
                $_SESSION['sapellido'] = $da['sapellido'];
                $_SESSION['ci'] = $da['ci'];
                $_SESSION['telefono'] = $da['telefono'];
                $_SESSION['direccion'] = $da['direccion'];
                $_SESSION['privilegio'] = $da['id_funcionalidad'];
                $_SESSION['id_persona'] = $da['id_persona'];
                $_SESSION['email'] = $da['email'];
                $_SESSION['bienvenida'] = 0;
                $_SESSION['cargo'] = $da['cargo'];


                return $contenido;
            }
        }

        public function agregar_cuenta($correo)
        {
            $sql = "select id_usuario,id_persona,id_rol from persona join usuario u on persona.id_persona = u.persona_id_persona
        join rol r on persona.rol_id_rol = r.id_rol
        where email='$correo'";
            $idcuenta = $this->obj_con->con_retorno($sql);
            $dat = mysqli_fetch_assoc($idcuenta);
            $sql = "insert into cuenta values ($dat[id_usuario],$dat[id_persona],$dat[id_rol])";
            $this->obj_con->sin_retorno($sql);
        }

        public function listar_inhabilitados()
        {
            $sql = "select * from persona where activo=0";
            return $this->obj_con->con_retorno($sql);
        }
    }
}