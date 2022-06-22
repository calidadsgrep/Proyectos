<?php
require_once 'models/Auth.php';
require_once 'models/Informe.php';
require_once 'models/Cliente.php';
require_once 'models/Proyecto.php';

class InformesController
{
    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Informe();
    }

    public function Etapas()
    {
        /*consultar el avance en elcumplimiento de los objetivos*/
        //  echo $_REQUEST['pid'];
        $etapas = $this->model->Etapas($_REQUEST['pid']);
        // print_r($etapas);
        $etapas0 = $this->model->Etapas0($_REQUEST['pid']);
        // print_r($etapas0);
        require_once 'views/informes/etapas.php';
    }
    public function Objetivos()
    {

        $objetivos = $this->model->Objetivo($_REQUEST['pid']);
        $objetivos0 = $this->model->Objetivo0($_REQUEST['pid']);
        /*echo'<pre>';
        print_r($objetivos);
        print_r($objetivos0);
        echo'</pre>';*/
        require_once 'views/informes/objetivos.php';
    }

    public function Reportes()
    {

        $cliente = new Cliente();
        $clientes = $cliente->Listar0();
        //print_r($clientes);
        require_once 'views/layouts/header.php';
        require_once 'views/informes/reporte.php';
        require_once 'views/layouts/footer.php';
    }
    public function Proyectos()
    {
 
        $proyecto = new Proyecto();
        $proyectos = $proyecto->Obtener0($_REQUEST['cliente']);
        // print_r($proyectos);

        echo '<label>Proyectos</label>';
        echo '<select name="proyecto_id" id="proyecto_id" class="form-control">';
        foreach ($proyectos as $value0) :
            echo '<option value="';
            echo  $value0->id;
            echo '">';
            echo  $value0->nombre . '</option>';
        endforeach;
       echo  '</select>';
    }
    public function Resultado(){      
        $reporte= $this->model->Reporte($_REQUEST['proyecto_id']);      
        require_once 'views/informes/resultado.php';        

    }
}
