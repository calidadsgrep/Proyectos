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
            $stm = $this->pdo->prepare("SELECT * FROM horario_soportes WHERE horario_id =$id ");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    


    public function Registrar(Soporte $data)
    {

        try {

            $stm = "INSERT INTO horario_soportes(horario_id, ruta_soporte, fecha_reg,enlace)
                             VALUES(?, ?, ?, ?)";
            $this->pdo->prepare($stm)->execute(array(
                $data->horario_id,
                $data->ruta_soporte,
                $data->fecha_reg,
                $data->enlace,

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
            $sql = "UPDATE soportes SET horario_id='$horario_id', ruta_soporte='$ruta_soporte', ubicacion='$fecha_reg', enlace='$data->enlace' WHERE id = $id";
            $this->pdo->prepare($sql)->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {

        try {
            $sql = "DELETE  FROM  horario_soportes WHERE id=$id ";
            $this->pdo->prepare($sql)->execute();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
