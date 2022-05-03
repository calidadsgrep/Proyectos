<?php
class Seguimiento
{
    private $pdo;
    public $id;
    public $fecha_control;
    public $cliente_id;
    public $propuesta;
    public $usuario_id;
    public $info1;
    public $info2;
    public $creacion;
    public $m_envio; 

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar()
    {

        try {
            $result = array();
            $stm = $this->pdo->prepare("SELECT clientes.* , clientes.id as cli_id  , tipo_clientes.* 
                                              FROM clientes, tipo_clientes
                                              WHERE estado_id=1
                                              AND clientes.tipo_cliente_id = tipo_clientes.id
                                              AND tipo_cliente_id = 3 
                                            ");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Prospectos()
    {

        try {
            $result = array();
            $stm = $this->pdo->prepare("SELECT clientes.*, clientes.id as cli_id , tipo_clientes.* 
                                              FROM clientes, tipo_clientes
                                              WHERE estado_id = 1
                                              AND clientes.tipo_cliente_id = tipo_clientes.id
                                              AND tipo_cliente_id != 3                                       
                                            ");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {

        try {
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM seguimientos WHERE cliente_id =$id ");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(Seguimiento $data)
    {
        try {

            $stm = "INSERT INTO seguimientos(cliente_id, fecha_control, usuario_id, propuesta, m_envio, info1, info2, creacion) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
            $this->pdo->prepare($stm)->execute(array(
                $data->cliente_id,
                $data->fecha_control,
                $data->usuario_id,
                $data->propuesta,
                $data->m_envio,
                $data->info1,
                $data->info2,
                $data->creacion               
            ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar(Seguimiento $data)
    {
        $id = $data->id;
        $nombre = $data->nombre;
        $nit = $data->nit;
        $ubicacion = $data->ubicacion;
        $potencial =       $data->potencial;
        $interesado_en =       $data->interesado_en;
        $como_se_entero =       $data->como_se_entero;
        $tipo_cliente_id = $data->tipo_cliente_id;

        try {
            $sql = "UPDATE clientes SET nombre='$nombre', nit='$nit', ubicacion='$ubicacion', potencial='$potencial', interesado_en='$interesado_en', como_se_entero='$como_se_entero', tipo_cliente_id='$tipo_cliente_id'  WHERE id = $id";
            $this->pdo->prepare($sql)->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    

}
