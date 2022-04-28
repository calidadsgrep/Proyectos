<?php
class Cliente
{
    private $pdo;
    public $id;
    public $nombre;
    public $nit;
    public $ubicacion;
    public $potencial;
    public $interesado_en;
    public $como_se_entero;
    public $tipo_cliente_id;


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
            $stm = $this->pdo->prepare("SELECT * FROM clientes WHERE id =$id ");
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(Cliente $data)
    {

        try {

            $stm = "INSERT INTO clientes(nombre, nit, ubicacion, potencial, interesado_en, como_se_entero, estado_id, tipo_cliente_id) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
            $this->pdo->prepare($stm)->execute(array(
                $data->nombre,
                $data->nit,
                $data->ubicacion,
                $data->potencial,
                $data->interesado_en,
                $data->como_se_entero,
                $data->estado_id,
                $data->tipo_cliente_id
            ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Actualizar(Cliente $data)
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
