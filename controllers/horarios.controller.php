<?php
require_once 'models/Auth.php';
require_once 'models/Horario.php';

class HorariosController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Horario();
    }

    public function Index()
    {

        require_once 'views/layouts/headerc.php';
        require_once 'views/horarios/obtener.php';
        require_once 'views/layouts/footer.php';
    }
    public function Obtener()
    {
        $horario = new Horario();
        require_once 'views/layouts/headerc.php';

        require_once 'views/horarios/obtener.php';
        // require_once 'views/layouts/footer.php';
    }
    public function Eventos()
    {
        $data= $this->model->Obtener($_REQUEST['id']);
        $color='#A80300';
        $textColor= '#ffffff';

      foreach($data  as $row){
     $data[] = array(
            'id'   => $row["id"],
            'title'   => $row["dia"],
            'start'   => $row["fecha"],
            'end'   => $row["fecha"],
            'color' => $color,
            'textColor' => $textColor,
           );}
        

        echo json_encode($data, JSON_HEX_QUOT | JSON_HEX_TAG);


    }
}
