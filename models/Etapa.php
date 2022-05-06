<?php
class Etapa
{
	private $pdo;
	public $id;
	public $nombre;
	public $descripcion;
	public $duracion;
	public $created;
    public $modified;
	

	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Database::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
     
	public function Listar($id){

		try {
			$result = array();
            $stm = $this->pdo->prepare("SELECT * FROM etapas WHERE proyecto_id=$id ");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}


	public function Obtener($id){

		try {
			$result = array();
            $stm = $this->pdo->prepare("SELECT * FROM etapas WHERE proyecto_id = $id ");
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}

	public function Registrar(Etapa $data){

		try {
			$stm = "INSERT INTO etapas(proyecto_id, notacion)
                             VALUES(?, ?)";
            $this->pdo->prepare($stm)->execute(array(
                $data->proyecto_id,
                $data->notacion,
                
            ));
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}

	public function Actualizar(Etapa $data){

		try {
			$result = array();
			$sql = "UPDATE plantillas SET nombre='$data->nombre', descripcion='$data->descripcion', duracion='$data->duracion'  modified='$data->modified'  WHERE id = '$data->id'";
            $this->pdo->prepare($sql)->execute();
           
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}



	
	
}