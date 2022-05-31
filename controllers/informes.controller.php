<?php
require_once 'models/Auth.php';
require_once 'models/Informe.php';

class InformesController
{
    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Informe();
    }

    public function Etapas(){
        /*consultar el avance en elcumplimiento de los objetivos*/
     //  echo $_REQUEST['pid'];
       $etapas= $this->model->Etapas($_REQUEST['pid']);
      // print_r($etapas);
       $etapas0= $this->model->Etapas0($_REQUEST['pid']);
      // print_r($etapas0);
       require_once 'views/informes/etapas.php';


    }
    public function Objetivos(){

        $objetivos = $this->model->Objetivo($_REQUEST['pid']);
        $objetivos0 = $this->model->Objetivo0($_REQUEST['pid']);
        /*echo'<pre>';echo'</pre>';
        print_r($objetivos);
        print_r($objetivos0);*/
        
        require_once 'views/informes/objetivos.php';
    }

    public function Act(){
        
    }


}
