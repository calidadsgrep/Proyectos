<?php
require_once 'models/Auth.php';
require_once 'models/Plantilla.php';

class PlantillasController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Plantilla();
    }
    public function Index()
    {
        $plantillas = $this->model->Listar();
        require_once 'views/layouts/header.php';
        require_once 'views/plantillas/index.php';
        require_once 'views/layouts/footer.php';
    }

    public function Crud()
    {
        if (isset($_REQUEST['id'])) {
            $plantillas = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'views/plantillas/crud.php';
    }
}
