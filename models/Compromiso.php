
<?php
class Compromiso
{
    private $pdo;
    public $id;
    public $horario_id;
    public $descripcion;
    public $fecha;


    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        $stm = $this->pdo->prepare("SELECT * FROM compromisos WHERE horario_id='$id'");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }
    public function Listar($id)
    {
        $stm = $this->pdo->prepare("SELECT * FROM compromisos WHERE id='$id'");
        $stm->execute();
        return $stm->fetch(PDO::FETCH_OBJ);
    }

    public function Registrar(Compromiso $data)
    {

        try {
            $stm = "INSERT INTO compromisos(horario_id, descripcion, fecha, estado)
            VALUES(?, ?, ?, ?)";
            $this->pdo->prepare($stm)->execute(array(
                $data->horario_id,
                $data->descripcion,
                $data->fecha,
                $data->estado

            ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar(Compromiso $data)
    {
        $id = $data->id;
        $horario_id = $data->horario_id;
        $descripcion =  $data->descripcion;
        $fecha =     $data->fecha;
        $estado =     $data->estado;

        try {
            $sql = "UPDATE compromisos SET horario_id='$horario_id', descripcion='$descripcion', fecha='$fecha',estado='$estado'  WHERE id = $id";
            $this->pdo->prepare($sql)->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {

        try {
            $sql = "DELETE  FROM  compromisos WHERE id=$id ";
            $this->pdo->prepare($sql)->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


}
