<?php
class Objetivo
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

	public function Listar($id)
	{

		try {
			$stm = $this->pdo->prepare("SELECT * FROM objetivos WHERE etapa_id=$id");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	public function Obtener($id)
	{

		try {
			$stm = $this->pdo->prepare("SELECT * FROM plantillas WHERE id = $id ");
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(Objetivo $data)
	{


		foreach ($data->objetivo as $key => $cantidades) {
			# code...
			try {
				$stm = "INSERT INTO objetivos(etapa_id, objetivo)
                             VALUES(?, ?)";

				$this->pdo->prepare($stm)
					->execute(
						array(
							$data->etapa_id,
							$data->objetivo[$key],
						)
					);
			} catch (Exception $e) {
				die($e->getMessage());
			}
			// return true;
		}
	}


	public function Actualizar(Objetivo $data)
	{

		try {
			$result = array();
			$sql = "UPDATE plantillas SET nombre='$data->nombre', descripcion='$data->descripcion', duracion='$data->duracion'  modified='$data->modified'  WHERE id = '$data->id'";
			$this->pdo->prepare($sql)->execute();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Obj_pro($pid)
	{
        /*consultar todos los objetivos  de todo el proyecto*/
		try {
			$stm = $this->pdo->prepare("SELECT COUNT(objetivos.objetivo) AS num_obj FROM  plantillas, etapas, objetivos 
										WHERE plantillas.id=$pid
										AND plantillas.id= etapas.proyecto_id
										AND etapas.id=objetivos.etapa_id 
										ORDER BY etapas.id");
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Obj_index($pid)
	{
        /*consultar todos los objetivos de todo el proyecto*/
		try {
			$stm = $this->pdo->prepare("SELECT etapas.*, etapas.id as et_id ,objetivos.id as obj_id, objetivos.objetivo as obj FROM  etapas, objetivos 
										WHERE 
										     etapas.proyecto_id=$pid
										AND etapas.id = objetivos.etapa_id
										ORDER BY objetivos.id ASC
										 ");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}
