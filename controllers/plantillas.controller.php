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
        $plantillas= new Plantilla();
        if (isset($_REQUEST['id'])) {
            $plantillas = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'views/plantillas/crud.php';
    }


    public function Registrar(){
        $plantilla= new Plantilla();
        $plantilla->id=$_REQUEST['id'];
        $plantilla->nombre=$_REQUEST['nombre'];
        $plantilla->descripcion=$_REQUEST['descripcion'];
        $plantilla->duracion=$_REQUEST['duracion'];
        $plantilla->created=date('Y-m-d');
        $plantilla->modified=date('Y-m-d');

        $plantilla->id > 0 ?
        $this->model->Actualizar($plantilla)
      : $this->model->Registrar($plantilla);
    
    }

    public function Gestion()
    {
        $plantillas= new Plantilla();
        $proyecto=$this->model->Obtener($_REQUEST['pid']);
        require_once 'views/layouts/header.php';
        require_once 'views/plantillas/gestion.php';
       // require_once 'views/layouts/footer.php';
        
    }

    public function Proyecto()
    {
        $plantillas= new Plantilla();
        $proyecto=$this->model->Obtener($_REQUEST['pid']);
        require_once 'views/plantillas/ver.php';
       
        
    }
   
}
