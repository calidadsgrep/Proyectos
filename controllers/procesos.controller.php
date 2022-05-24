<?php
require_once 'models/Auth.php';
require_once 'models/Proceso.php';

class ProcesosController
{
    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Proceso();
    }

    public function Index()
    {
        $procesos = $this->model->Listar();
        require_once 'views/layouts/header.php';
        require_once 'views/Procesos/index.php';
        require_once 'views/layouts/footer.php';
    }

    public function Crud()
    {
        $procesos = new Proceso();
        if (isset($_REQUEST['id'])) {
            $procesos = $this->model->Obtener($_REQUEST['id']);
        };
        require_once 'views/procesos/crud.php';
    }

    public function Guardar()
    {

        $proceso = new Proceso();
        $proceso->id = $_REQUEST['id'];
        $proceso->proceso = $_REQUEST['proceso'];
        $proceso->sigla = $_REQUEST['sigla'];

        $proceso->id > 0 ?
            $this->model->Actualizar($proceso)
            : $this->model->Registrar($proceso);
    }

    public function Obtener()
    {
        $Procesos = $this->model->Obtener($_REQUEST['id']);
        require_once 'views/Procesos/index.php';
    }

    public function Eliminar()
    {
         $this->model->Eliminar($_REQUEST['id']);
    }
}
