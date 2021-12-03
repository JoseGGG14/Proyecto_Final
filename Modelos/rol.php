<?php require_once 'conexion.php';

class Rol
{
	//Atribitos= Variables
	public $id;
	public $nombre;
	public $apePaterno;
	public $apeMaterno;
	public $colonia;
	public $ciudad;
	public $dirección;
	public $telefono;
	public $email;
	public $sueldo;
	public $horarioIni;
	public $horarioFin;
	public $estatus;
	private $conexion;
	private $observaciones;

	//Constructor
	public function __construct ()
	{
		$this->id = 0;
		$this->nombre = '';
		$this->apePaterno = '';
		$this->apeMaterno = '';
		$this->colonia = '';
		$this->ciudad = '';
		$this->dirección = '';
		$this->telefono = '';
		$this->email = '';
		$this->sueldo = '';
		$this->horarioIni = '';
		$this->horarioFin = '';
		$this->estatus = '';

		$this->conexion = new Conexion();
	}
	//Metodos
	public static function listar()
	{
		$conexion = new Conexion();
		$listado = $conexion->consultar("SELECT * FROM roles");
		$conexion->cerrar();
		return $listado;
	}
	public static function obtenerPorId ($id)
	{
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM roles WHERE Id = $id");
		$conexion->cerrar();
		return $listado[0];
	}
	public function ingresar ()
	{
		$s = "INSERT INTO roles (Nombre,ApePaterno,ApeMaterno,Colonia,Ciudad,Dirección,Telefono,Email,Sueldo,HorarioIni,HorarioFin,Estatus) VALUES ('$this->nombre'".", '$this->apePaterno'".", '$this->apeMaterno'".", '$this->colonia'".", '$this->ciudad'".", '$this->dirección'".", '$this->telefono'".", '$this->email'".", '$this->sueldo'".", '$this->horarioIni'".", '$this->horarioFin'".", '$this->estatus')";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
	public function eliminar ()
	{
		$s = "DELETE FROM roles WHERE Id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
	public function editar ()
	{
		$s = "UPDATE roles SET Nombre = '$this->nombre'".",ApePaterno= '$this->apePaterno'".",ApeMaterno= '$this->apeMaterno'".",Colonia= '$this->colonia'".",Ciudad= '$this->ciudad'".",Dirección= '$this->dirección'".",Telefono= '$this->telefono'".",Email= '$this->email'".",Sueldo= '$this->sueldo'".",HorarioIni= '$this->horarioIni'".",HorarioFin= '$this->horarioFin'".",Estatus= '$this->estatus' WHERE Id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
	public function Agregar()
	{
		ingresar();
	}
}