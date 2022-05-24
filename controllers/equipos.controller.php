<?php
require_once 'models/Auth.php';
require_once 'models/Cliente.php';
require_once 'models/Equipo.php';
require_once 'models/Proceso.php';

class EquiposController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Equipo();
    }


    public function Index()
    {
        
        require_once 'views/layouts/header.php';
        $equipos= $this->model->Listar($_REQUEST['cli_id']);   
      // print_r($equipos)  ;          
        require_once 'views/equipos/index.php';
        require_once 'views/layouts/footer.php';
    }


    public function Crud(){
        $equipo = new Equipo();
        $proceso=new Proceso();
        $procesos= $proceso->Listar();
        if(isset($_REQUEST['id'])){
            $equipo = $this->model->Obtener($_REQUEST['id']);          
        };
          require_once 'views/equipos/crud.php';
    }

    public function Estado(){
        $cliente = new Equipo();
        if(isset($_REQUEST['id'])){
            $cliente = $this->model->Obtener($_REQUEST['id']);
        };
          require_once 'views/clientes/estado.php';

    }

    public function Guardar(){
     //sleep(10);
     $equipo = new Equipo();

     $equipo->id=$_REQUEST['id'];
     $equipo->nombres=$_REQUEST['nombres'];
     $equipo->apellidos=$_REQUEST['apellidos'];
     $equipo->correo=$_REQUEST['correo'];
     $equipo->contacto=$_REQUEST['contacto'];
     $equipo->cliente_id=$_REQUEST['cliente_id'];
     $equipo->proceso_id=$_REQUEST['proceso_id'];
     

     $equipo->id > 0 
     ? $this->model->Actualizar($equipo)
     : $this->model->Registrar($equipo);

    }
    public function GuardarE(){
        //sleep(10);
        $cliente = new Equipo();
   
        $cliente->id=$_REQUEST['id'];
        
        $cliente->tipo_cliente_id=$_REQUEST['tipo_cliente_id'];
     
        $this->model->ActualizarE($cliente);
       
   
       }
    
}
