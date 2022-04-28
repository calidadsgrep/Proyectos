<?php
//require_once 'Model/Permiso.php';
class Auth
{
	private $pdo;
	public $id;
	

	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Database::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Auth($u, $c){
		 
		try
		{
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM usuarios WHERE clave='$c' AND usuario='$u' AND estado='1'");
			$stm->execute();

            return $stm->fetch(PDO::FETCH_OBJ);

		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}


	}
}