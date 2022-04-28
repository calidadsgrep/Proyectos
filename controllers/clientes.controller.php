<?php
require_once 'models/Auth.php';
require_once 'models/Cliente.php';

class ClientesController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Cliente();
    }

    public function Index()
    {
        ;
        require_once 'views/layouts/header.php';
        if(isset($_REQUEST['tp'])):
            $clientes = $this->model->Prospectos();
           // print_r( $clientes);
        else:
            $clientes = $this->model->Listar();
        endif;
        
        require_once 'views/clientes/index.php';
        require_once 'views/layouts/footer.php';
    }


    public function Crud(){
        $cliente = new Cliente();
        if(isset($_REQUEST['id'])){
            $cliente = $this->model->Obtener($_REQUEST['id']);
        };
          require_once 'views/clientes/crud.php';

    }

    public function Guardar(){
     //sleep(10);
     $cliente = new Cliente();

     $cliente->id=$_REQUEST['id'];
     $cliente->nombre=$_REQUEST['nombre'];
     $cliente->nit=$_REQUEST['nit'];
     $cliente->ubicacion=$_REQUEST['ubicacion'];
     $cliente->potencial=$_REQUEST['potencial'];
     $cliente->interesado_en=$_REQUEST['interesado_en'];
     $cliente->como_se_entero=$_REQUEST['como_se_entero'];
     $cliente->tipo_cliente_id=$_REQUEST['tipo_cliente_id'];
     $cliente->estado_id=1;

     $cliente->id > 0 
     ? $this->model->Actualizar($cliente)
     : $this->model->Registrar($cliente);

    }
    
}
