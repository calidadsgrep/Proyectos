<?php
//require_once 'Model/Permiso.php';
class Usuario
{
	private $pdo;
	public $id;
	public $tipo_identificacion;
	public $num_identificacion;
	public $nombres;
	public $apellidos;
	public $telefono;
	public $direccion;
	public $correo;
	public $foto;
	public $username;
	public $password;
	public $estado;
	public $infraestructura_id;
	public $tipo_usuario;
	public $tsangre;
	public $created;
	public $modified;
	public $alergias;
	public $genero;
	public $mreducida;

	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Database::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Index(){
		
	}
}