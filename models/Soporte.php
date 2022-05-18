<?php
class Soporte
{
    private $pdo;
    public $id;
    public $horario_id;
    public $ruta_soporte;
    public $fecha_reg;

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

        try {
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM clientes WHERE id =$id ");
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(Soporte $data)
    {

        try {

          $stm = "INSERT INTO horario_soportes(horario_id, ruta_soporte, fecha_reg)
                             VALUES(?, ?, ?)";
            $this->pdo->prepare($stm)->execute(array(
                $data->horario_id,
                $data->ruta_soporte,
                $data->fecha_reg,

            ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar(Soporte $data)
    {
        $id = $data->id;
        $horario_id = $data->horario_id;
        $ruta_soporte = $data->ruta_soporte;
        $fecha_reg = $data->fecha_reg;

        try {
            $sql = "UPDATE soportes SET horario_id='$horario_id', ruta_soporte='$ruta_soporte', ubicacion='$fecha_reg'  WHERE id = $id";
            $this->pdo->prepare($sql)->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
