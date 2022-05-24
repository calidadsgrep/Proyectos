
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

    public function Obtener()
    {
        $stm = $this->pdo->prepare("SELECT horarios.*, actividades.actividad,objetivos.objetivo 
                FROM horarios,actividades,objetivos 
                WHERE                
                     horarios.actividad_id=actividades.id
                 AND actividades.objetivo_id=objetivos.id                 
                 ");
        $stm->execute();
        return $stm->fetchAll();
    }

    public function Asignado($proyecto_id, $etapa_id)
    {
        $stm = $this->pdo->prepare("SELECT horarios.*, actividades.*,objetivos.objetivo,procesos.proceso, equipos.*, proyectos.*
                FROM horarios,actividades,objetivos, procesos, equipos, proyectos 
                WHERE                
                 proyecto_id='$proyecto_id'
                 AND
                 etapa_plantilla_id='$etapa_id'
                 AND proyectos.id=horarios.proyecto_id   
                 AND horarios.actividad_id=actividades.id
                 AND actividades.objetivo_id=objetivos.id 
                 AND actividades.responsable=procesos.id 
                 AND equipos.cliente_id=proyectos.cliente_id 

                 AND actividades.responsable=equipos.proceso_id                 
                 ");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }


    public function Registrar(Horario $data)
    {

        try {
            $stm = "INSERT INTO horarios(fecha, dia, hora1, hora2, etapa_plantilla_id, actividad_id, proyecto_id,estado)
            VALUES(?, ?, ?, ?, ?, ?, ?,?)";
            $this->pdo->prepare($stm)->execute(array(
                $data->fecha,
                $data->dia,
                $data->hora1,
                $data->hora2,
                $data->etapa_plantilla_id,
                $data->actividad_id,
                $data->proyecto_id,
                $data->estado
            ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Ver($hid)
    {
        $stm = $this->pdo->prepare("SELECT horarios.*, actividades.actividad,objetivos.objetivo 
                FROM horarios,actividades,objetivos 
                WHERE                
                horarios.id='$hid'
                 AND horarios.actividad_id=actividades.id
                 AND actividades.objetivo_id=objetivos.id                 
                 ");
        $stm->execute();
        return $stm->fetch(PDO::FETCH_OBJ);
    }

    public function Actualizar(Horario $data)
    {
        try {
            $sql = "UPDATE horarios SET estado='$data->estado' WHERE id = '$data->id'";
            $this->pdo->prepare($sql)->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
