<?php
require_once 'models/Auth.php';
require_once 'models/Plantilla.php';
require_once 'models/Etapa.php';
require_once 'models/Objetivo.php';
require_once 'models/Actividad.php';
require_once 'models/Proyecto.php';
require_once 'models/Usuario.php';


class ProyectosController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Proyecto();
        
    }
    public function Index()
    {
        $proyectos = $this->model->Listar();
        require_once 'views/layouts/header.php';
        require_once 'views/proyectos/index.php';
        require_once 'views/layouts/footer.php';
    }

    public function Crud()
    {

        $cliente0=new Usuario();
        $clientes=$cliente0->Listar();

        $plantilla0=new Plantilla();
        $plantillas=$plantilla0->Listar();

        $proyectos= new Proyecto();
        if (isset($_REQUEST['id'])) {
            $proyectos= $this->model->Obtener($_REQUEST['id']);
        }
         require_once 'views/proyectos/crud.php';
    }


    public function Registrar(){
        $proyecto= new Proyecto();
        $proyecto->id=$_REQUEST['id'];
        $proyecto->plantilla_id=$_REQUEST['plantilla_id'];
        $proyecto->cliente_id=$_REQUEST['cliente_id'];
        $proyecto->fecha_inicio=$_REQUEST['fecha_inicio'];
        $proyecto->fecha_cierre=$_REQUEST['fecha_cierre'];
        $proyecto->nombre=$_REQUEST['nombre'];

        $proyecto->id > 0 ?
        $this->model->Actualizar($proyecto)
      : $this->model->Registrar($proyecto);
    
    }

    public function Gestion()
    {
        $plantillas= new Proyecto();
        $etapa= new Etapa();        
        $objetivo= new Objetivo();
        $actividades= new Actividad();

        $proyecto=$this->model->Obtener($_REQUEST['pid']);
        $etapas= $etapa->Listar($_REQUEST['pid']);
        $objetivos= $objetivo->Obj_pro($_REQUEST['pid']);
        $objindex= $objetivo->Obj_index($_REQUEST['pid']);
        $act_pro= $actividades->Act_Pro($_REQUEST['pid']);        
        $_SESSION['pid']= $_REQUEST['pid'];
        require_once 'views/layouts/header.php';
        require_once 'views/plantillas/gestion.php';
        require_once 'views/layouts/footer.php';
        
    }

    public function Proyecto()
    {
        $plantillas= new Proyecto();
        
        $etapa= new Etapa();        
        $obj= new Objetivo();
        $act= new Actividad();
        
        $proyecto=$this->model->Obtener($_REQUEST['pid']);        
        

        require_once 'views/plantillas/ver.php';
    }

   



   
}