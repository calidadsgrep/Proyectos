<?php
class Tipousuario
{
	private $pdo;
	public $id;
	public $tipo_usuario;
	
public function __CONSTRUCT()
	{
		try {
			$this->pdo = Database::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


    public function Tipos_usuarios(){
        try {
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM tipo_usuarios WHERE id !='5'");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

}