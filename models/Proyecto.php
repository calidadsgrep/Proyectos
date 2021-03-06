<?php
class Proyecto
{
	private $pdo;
	public $id;
	public $nombre;
	public $fecha_inicio;
	public $fecha_cierre;
	public $cliente_id;
    public $plantilla_id;
	
	

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
            $stm = $this->pdo->prepare("SELECT proyectos.*,clientes.nombre as cliente FROM proyectos,clientes WHERE proyectos.cliente_id= clientes.id");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}


	public function Obtener($id){

		try {
			$result = array();
            $stm = $this->pdo->prepare("SELECT * FROM proyectos WHERE id = $id ");
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}
	public function Obtener0($id){

		try {
			$result = array();
            $stm = $this->pdo->prepare("SELECT * FROM proyectos WHERE cliente_id = $id ");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}

	public function Registrar0(Proyecto $data){
 //print_r($data);
		try {
			$stm = "INSERT INTO proyectos(plantilla_id, cliente_id, fecha_inicio,fecha_cierre, nombre)
                             VALUES(?, ?, ?, ?, ?)";
            $this->pdo->prepare($stm)->execute(array(
                $data->plantilla_id,
                $data->cliente_id,
                $data->fecha_inicio,
                $data->fecha_cierre,
				$data->nombre
            ));
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}

	public function Actualizar(Proyecto $data){

		try {
			$result = array();
			$sql = "UPDATE proyectos SET plantilla_id='$data->plantilla_id', cliente_id='$data->cliente_id', 	fecha_inicio='$data->fecha_inicio',  fecha_cierre='$data->fecha_cierre', nombre='$data->nombre'  WHERE id = '$data->id'";
            $this->pdo->prepare($sql)->execute();
           
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}


	

	



	
	
}