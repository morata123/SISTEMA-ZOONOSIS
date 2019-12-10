<?php
class conexion{
	private $host;
	private $user;
	private $clave;
	private $db;
	public $con;// variable almacenara la cadena de conexion

	function __construct(){
	$this->host="localhost";
	$this->user="root";
	$this->clave="";
	$this->db="zoonosis_db";
	$this->con=mysqli_connect($this->host, $this->user,$this->clave);// cadena de conexion
	mysqli_query($this->con, 'SET NAMES UTF-8');

	if($this->con){
		mysqli_select_db($this->con,$this->db);

	}
	}

public function sin_retorno($sql){
mysqli_query($this->con,$sql);
}

public function con_retorno($sql){
$resp=mysqli_query($this->con, $sql);
return $resp;
}
}