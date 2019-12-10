<?php
session_start();
require("../modelo/mdl_login.php");

class ctrl_login{
public $obj_mod;

public function __construct(){
	$this->obj_mod=new mdl_login();
}


public function insertar($p){
		$this->obj_mod->set("usuario" ,$p['nick']);
    $this->obj_mod->set("id_per" ,$p['id_per']);
    $this->obj_mod->set("rol" ,$p['rol']);
        $this->obj_mod->set("clave" ,md5($p['1clave']));

	    $this->obj_mod->insertar();
    $this->obj_mod->agregar_cuenta($p['nick']);

}

public function validar_ingreso($p){
    $usuario=$p['nick'];
    $clave=md5($p['clave']);
   $resp=$this->obj_mod->validar($usuario,$clave);
   $row=mysqli_fetch_assoc($resp);
   if($row['usuario'] && $row['clave']){
       $_SESSION['usuario']=$row['usuario'];
      echo "<script> window.location.href='../admin/docs/index.php';</script>";
   }
   else {
//       echo "<script>alert('usuario o clave incorrecta')</script>";
       $_SESSION['mensaje']=1;
       echo "<script> window.location.href='../admin/docs/page-login.php';</script>";
   }
}
}
                            