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

    public function Info_fechamin()
    {
        try {
            $stm = $this->pdo->prepare("SELECT  MIN(fecha) as finicio 
                                        FROM   horarios
                                          WHERE
                                               horarios.proyecto_id=1");
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Info_fechamax()
    {
        try {
            $stm = $this->pdo->prepare("SELECT  MAX(fecha) as ffin 
                                        FROM   horarios
                                          WHERE
                                               horarios.proyecto_id=1");
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



}
