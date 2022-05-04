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
        $Etapas = $this->model->Listar($_REQUEST['pid']);
        require_once 'views/etapas/index.php';
    
    }

    public function Crud()
    {
        $Etapas= new Etapa();
        if (isset($_REQUEST['id'])) {
            $Etapas = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'views/Etapas/crud.php';
    }


    public function Registrar(){
        $Etapa= new Etapa();
        $Etapa->id=$_REQUEST['id'];
        $Etapa->nombre=$_REQUEST['nombre'];
        $Etapa->descripcion=$_REQUEST['descripcion'];
        $Etapa->duracion=$_REQUEST['duracion'];
        $Etapa->created=date('Y-m-d');
        $Etapa->modified=date('Y-m-d');

        $Etapa->id > 0 ?
        $this->model->Actualizar($Etapa)
      : $this->model->Registrar($Etapa);
    
    }

    public function Gestion()
    {
        $Etapas= new Etapa();
        $proyecto=$this->model->Obtener($_REQUEST['pid']);
        require_once 'views/layouts/header.php';
        require_once 'views/Etapas/gestion.php';
       // require_once 'views/layouts/footer.php';
        
    }

    public function Proyecto()
    {
        $Etapas= new Etapa();
        $proyecto=$this->model->Obtener($_REQUEST['pid']);
        require_once 'views/Etapas/ver.php';
       
        
    }
    public function Etapa()
    {
        $Etapas= new Etapa();
         $proyecto=$this->model->Obtener($_REQUEST['pid']);
        require_once 'views/etapas/index.php';
       
        
    }


}
