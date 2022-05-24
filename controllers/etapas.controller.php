<?php
require_once 'models/Auth.php';
require_once 'models/Etapa.php';

class EtapasController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Etapa();
    }
    public function Index()
    {
        $etapas = $this->model->Listar($_REQUEST['pid']);
        require_once 'views/etapas/index.php';
    }

    public function Crud()
    {
        $Etapas = new Etapa();
        if (isset($_REQUEST['id'])) {
            $Etapas = $this->model->Obtener($_REQUEST['id']);
        }
        require_once 'views/Etapas/crud.php';
    }


    public function Registrar()
    {
        $etapa = new Etapa();
        $etapa->proyecto_id    = $_REQUEST['proyecto_id'];
        $etapa->notacion = $_REQUEST['notacion'];
        $etapa->id > 0 ?
            $this->model->Actualizar($etapa)
            : $this->model->Registrar($etapa);
    }


    public function Gestion()
    {
        $Etapas = new Etapa();
        $proyecto = $this->model->Obtener($_REQUEST['pid']);
        require_once 'views/layouts/header.php';
        require_once 'views/Etapas/gestion.php';
        // require_once 'views/layouts/footer.php';

    }

    public function Proyecto()
    {
        $Etapas = new Etapa();
        $proyecto = $this->model->Obtener($_REQUEST['pid']);
        require_once 'views/Etapas/ver.php';
    }
    public function Etapa()
    {
        $Etapas = new Etapa();
        $proyecto = $this->model->Obtener($_REQUEST['pid']);
        require_once 'views/etapas/index.php';
    }
}
