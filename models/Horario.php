
<?php
class Horario
{
    private $pdo;
    public $id;
    public $etapa_plantilla_id;
    public $actividad_id;
    public $proyecto_id;
    public $fecha;
    public $dia;
    public $hora1;
    public $hora2;




    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }



    public function Obtener($proyecto_id)
    {
        $stm = $this->pdo->prepare("SELECT horarios.*, actividades.actividad,objetivos.objetivo 
                FROM horarios,actividades,objetivos 
                WHERE                
                 proyecto_id='$proyecto_id'
                 AND horarios.actividad_id=actividades.id
                 AND actividades.objetivo_id=objetivos.id                 
                 ");
        $stm->execute();
        return $stm->fetchAll();
    }

    public function Asignado($proyecto_id, $etapa_id)
    {
        $stm = $this->pdo->prepare("SELECT horarios.*, actividades.actividad,objetivos.objetivo 
                FROM horarios,actividades,objetivos 
                WHERE                
                 proyecto_id='$proyecto_id'
                 AND
                 etapa_plantilla_id='$etapa_id'
                 AND horarios.actividad_id=actividades.id
                 AND actividades.objetivo_id=objetivos.id                 
                 ");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }
    

    public function Registrar(Horario $data)
    {

        try {
            $stm = "INSERT INTO horarios(fecha, dia, hora1, hora2, etapa_plantilla_id, actividad_id, proyecto_id)
            VALUES(?, ?, ?, ?, ?, ?, ?)";
            $this->pdo->prepare($stm)->execute(array(
                $data->fecha,
                $data->dia,
                $data->hora1,
                $data->hora2,
                $data->etapa_plantilla_id,
                $data->actividad_id,
                $data->proyecto_id
            ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}