<?php
require_once ("conexion.php");
$obj= new conexion();

if (isset($_GET['id_persona']))
{
    $id=$_GET['id_persona'];
    $sql="UPDATE persona SET activo=1 where id_persona=$id";
    $obj->con_retorno($sql);
    $sql="select * from persona where id_persona=$id";
    $datos=$obj->con_retorno($sql);
    $row=mysqli_fetch_assoc($datos);
    $sql="select * from usuario where usuario='$row[email]' ";
    $dat=$obj->con_retorno($sql);
    $ro=mysqli_fetch_assoc($dat);

    if( $ro['usuario'])
    {
        $sql="update usuario set activousuario=1 where persona_id_persona=$_GET[id_persona]";
        $obj->sin_retorno($sql);
        $sql="insert into cuenta (usuario_id_usuario ,usuario_id_usuario, rol_id_rol) values 
        ($ro[id_usuario],$row[id_persona],3)";
        $obj->sin_retorno($sql);
    }
    echo "<script> window.location.href='../admin/docs/table-personas.php';</script>";
}