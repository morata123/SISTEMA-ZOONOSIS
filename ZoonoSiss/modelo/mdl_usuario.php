<?php 

require("conexion.php");
class mdl_usuario
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
	function __construct()
	{
	
		$this->id_persona=0;
        $this->nombre="";
        $this->papellido="";
        $this->sapellido="";
        $this->ci=0;
        $this->telefono=0;
        $this->direccion="";
        $this->email="";
		
	$this->obj_con=new conexion();

	}

	public function set($atributo, $valor){
		$this->$atributo=$valor;
	}

	public function insertar_cliente(){
		$sql="insert into persona(nombre,papellido,sapellido,ci,telefono,direccion,email) values('$this->nombre','$this->papellido','$this->sapellido', '$this->ci','$this->telefono','$this->direccion','$this->email');";
		$this->obj_con->sin_retorno($sql);
	}
	public function buscar_id(){
		$sql="SELECT max(id_persona) FROM persona;";
		return $this->obj_con->con_retorno($sql);

	}
}
?>