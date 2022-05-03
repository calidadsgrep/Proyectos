<?php
class Plantilla
{
	private $pdo;
	public $id;
	public $nombre;
	public $descripcion;
	public $duracion;
	

	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Database::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
     
	public function Listar(){

		try {
			$result = array();
            $stm = $this->pdo->prepare("SELECT * FROM plantillas ");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}


	public function Obtener($id){

		try {
			$result = array();
            $stm = $this->pdo->prepare("SELECT * FROM plantillas WHERE id = $id ");
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}

	public function Registrar(Usuario $data){

		try {
			$stm = "INSERT INTO usuarios(tipo_identificacion, num_identificacion, nombres, apellidos, telefono,
			                              correo, 	usuario, clave, estado, tipo_usuario, created, modified)
                             VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $this->pdo->prepare($stm)->execute(array(
                $data->tipo_identificacion,
                $data->num_identificacion,
                $data->nombres,
                $data->apellidos,
                $data->telefono,
                $data->correo,
                $data->usuario,
                $data->clave,
                $data->estado,
                $data->tipo_usuario,
                $data->created,
				$data->modified
            ));
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}

	public function Actualizar(Usuario $data){

		try {
			$result = array();
			$sql = "UPDATE usuarios SET tipo_identificacion='$data->tipo_identificacion', num_identificacion='$data->num_identificacion', nombres='$data->nombres', apellidos='$data->apellidos', telefono='$data->telefono',
			correo='$data->correo', usuario='$data->usuario', estado='$data->estado', tipo_usuario='$data->tipo_usuario', modified='$data->modified'  WHERE id = '$data->id'";
            $this->pdo->prepare($sql)->execute();
           
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}



	
	
}