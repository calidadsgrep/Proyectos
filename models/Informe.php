<?php
class Informe
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

    public function Clientes()
    {
        try {
            $stm = $this->pdo->prepare("SELECT tipo_clientes.tipo_cliente, COUNT(*) as cantidad FROM clientes, tipo_clientes WHERE estado_id = 1 AND clientes.tipo_cliente_id = tipo_clientes.id  GROUP BY tipo_cliente_id");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Proyectos()
    {
        try {
            $stm = $this->pdo->prepare("SELECT proyectos.nombre, COUNT(*) as cantidad FROM proyectos, clientes WHERE  proyectos.cliente_id = clientes.id  GROUP BY plantilla_id");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Info_planear()
    {
        try {
            $stm = $this->pdo->prepare("SELECT C.id as c_id, C.nombre as cli_nom, P.nombre, P.id as p_id ,P.fecha_inicio, P.fecha_cierre
                                        FROM   clientes C
                                            INNER JOIN  proyectos P ON C.id=P.cliente_id");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    } //proyectos P, etapas E, objetivos O, actividades A

    public function Info_crono()
    {
        try {
            $stm = $this->pdo->prepare("SELECT H.id, H.fecha, H.dia, H.hora1, H.hora2, H.etapa_plantilla_id 
                                        FROM   proyectos P
                                            INNER JOIN  Horarios H ON H.proyecto_id=P.id
                                            WHERE
                                                 P.id=1");
            $stm->execute();
            $Data = array();

            while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {

                $Data[] = $row;
            }

            // echo json_encode($Data);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Info_fechamin($id)
    {
        try {
            $stm = $this->pdo->prepare("SELECT  MIN(fecha) as finicio 
                                        FROM   horarios
                                          WHERE
                                               horarios.proyecto_id=$id");
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Info_fechamax($id)
    {
        try {
            $stm = $this->pdo->prepare("SELECT  MAX(fecha) as ffin 
                                        FROM   horarios
                                          WHERE
                                               horarios.proyecto_id=$id");
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }



    public function Info_desarrollo()
    {
        try {
            $stm = $this->pdo->prepare("SELECT proyectos.nombre, COUNT(*) as cantidad FROM proyectos, clientes WHERE  proyectos.cliente_id = clientes.id  GROUP BY plantilla_id");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Etapas($id)
    { //todas las act
        try {
            $stm = $this->pdo->prepare("SELECT COUNT(actividad_id) As total_Act, etapas.notacion, horarios.etapa_plantilla_id,horarios.proyecto_id 
                                        FROM horarios, etapas 
                                        WHERE proyecto_id=$id  
                                        AND etapas.id=horarios.etapa_plantilla_id  
                                        
                                        GROUP BY etapa_plantilla_id");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Etapas0($id)
    { //todas las act
        try {
            $stm = $this->pdo->prepare("SELECT COUNT(actividad_id) As total_Act, etapas.notacion, horarios.etapa_plantilla_id,horarios.proyecto_id 
                                        FROM horarios, etapas  
                                        WHERE proyecto_id=$id  
                                        AND etapas.id=horarios.etapa_plantilla_id  
                                        AND horarios.estado!=0 
                                        GROUP BY etapa_plantilla_id");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Objetivo($id)
    { //todas las act
        try {
            $stm = $this->pdo->prepare("SELECT COUNT(horarios.id) As actividades , objetivos.objetivo, objetivos.id as obj_id, etapas.notacion
                                        FROM actividades
                                          LEFT JOIN horarios ON actividades.id=horarios.actividad_id
                                          LEFT JOIN objetivos ON actividades.objetivo_id =objetivos.id
                                          INNER JOIN etapas on objetivos.etapa_id=etapas.id
                                        WHERE horarios.proyecto_id=$id
                                        
                                        group by actividades.objetivo_id
                                        ");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Objetivo0($id)
    { //todas las act
        try {
            $stm = $this->pdo->prepare("SELECT COUNT(horarios.id) As actividades , objetivos.objetivo, objetivos.id as obj_id
                                        FROM actividades
                                          LEFT JOIN horarios ON actividades.id=horarios.actividad_id
                                          LEFT JOIN objetivos ON actividades.objetivo_id =objetivos.id
                                        WHERE horarios.proyecto_id=$id
                                        AND
                                        horarios.estado = 1
                                        group by actividades.objetivo_id
                                        ");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Funcionarios()
    {

        try {
            $stm = $this->pdo->prepare("SELECT COUNT(horarios.id) As amount, TIMEDIFF(horarios.hora1, horarios.hora2) as horas, CONCAT(usuarios.nombres,' ',usuarios.apellidos) as fullName , usuarios.id as user_id
                                        FROM horarios
                                          LEFT JOIN usuarios ON usuarios.id=horarios.usuario_id                                          
                                        group by horarios.usuario_id");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Func_cumplidas()
    {

        try {
            $stm = $this->pdo->prepare("SELECT COUNT(horarios.id) As amount, TIMEDIFF(horarios.hora1, horarios.hora2) as horas, usuarios.id as user_id
                                        FROM horarios
                                          LEFT JOIN usuarios ON usuarios.id=horarios.usuario_id  
                                          where horarios.estado = 1                                        
                                        group by horarios.usuario_id");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function Compromisos()
    {
        try {
            $stm = $this->pdo->prepare("SELECT COUNT(compromisos.id) AS cantidad,  actividades.actividad, horarios.fecha, compromisos.descripcion,compromisos.fecha as comp_fecha,proyectos.nombre as pro, clientes.nombre 
                                        FROM actividades
                                         INNER JOIN horarios ON actividades.id=horarios.actividad_id
                                         INNER JOIN compromisos ON horarios.id=compromisos.horario_id
                                         INNER JOIN proyectos ON proyectos.id=horarios.proyecto_id
                                         INNER JOIN clientes ON  proyectos.cliente_id = clientes.id 
                                         GROUP BY horarios.actividad_id");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Reporte($pid)
    {
 $hoy=date('Y-m-d');
        try {
            $stm = $this->pdo->prepare("SELECT  CONCAT( usuarios.nombres,' ',usuarios.apellidos) AS fullName,   actividades.actividad,etapas.notacion, horarios.fecha,horarios.estado, proyectos.nombre as pro, clientes.nombre 
            FROM actividades
             INNER JOIN horarios ON actividades.id=horarios.actividad_id  
             INNER JOIN usuarios ON  horarios.usuario_id = usuarios.id            
             INNER JOIN proyectos ON proyectos.id=horarios.proyecto_id
             INNER JOIN etapas ON etapas.id= horarios.etapa_plantilla_id
             INNER JOIN clientes ON  proyectos.cliente_id = clientes.id             
                WHERE horarios.proyecto_id=$pid AND horarios.estado=0 AND horarios.fecha <='$hoy'
             GROUP BY horarios.actividad_id");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
