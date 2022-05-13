<?php
require_once 'models/Auth.php';
require_once 'models/Plantilla.php';
require_once 'models/Etapa.php';
require_once 'models/Objetivo.php';
require_once 'models/Actividad.php';
require_once 'models/Proyecto.php';
require_once 'models/Usuario.php';
require_once 'models/Etapa_plantilla.php';


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

    public function Etapa_index()
    {
        $proyectos = $this->model->Listar();
        $etapa = new Etapa();
        $etapas = $etapa->Listar($_REQUEST['pid']);
        $etapasActs = $etapa->Etapa_act($_REQUEST['pid']);
        //print_r($etapasActs);
        require_once 'views/proyectos/etapa_index.php';
    }

    public function Crud()
    {

        $cliente0 = new Usuario();
        $clientes = $cliente0->Listar();

        $plantilla0 = new Plantilla();
        $plantillas = $plantilla0->Listar();

        $proyectos = new Proyecto();
        if (isset($_REQUEST['id'])) {
            $proyectos = $this->model->Obtener($_REQUEST['id']);
        }
        require_once 'views/proyectos/crud.php';
    }


    public function Registrar()
    {
        $proyecto = new Etapa_plantilla();

        $proyecto->id = $_REQUEST['id'];
        $proyecto->etapa_id     = $_REQUEST['etapa_id'];
        $proyecto->fecha1 = $_REQUEST['fecha_inicio'];
        $proyecto->fecha2 = $_REQUEST['fecha_cierre'];
        $proyecto->dias = @$_REQUEST['dia1'] . '-' . @$_REQUEST['dia2'] . '-' . @$_REQUEST['dia3'] . '-' . @$_REQUEST['dia4'] . '-' . @$_REQUEST['dia5'] . '-' . @$_REQUEST['dia6'];
        $proyecto->hora1 = $_REQUEST['hora'];
        $proyecto->hora2 = $_REQUEST['hora2'];
        $dias = $proyecto->dias;
        $fechaInicio = strtotime($proyecto->fecha1);
        $fechaFin = strtotime($proyecto->fecha2);
        @$lunes = $_REQUEST['dia1'];
        @$martes = $_REQUEST['dia2'];
        @$miercoles = $_REQUEST['dia3'];
        @$jueves = $_REQUEST['dia4'];
        @$viernes = $_REQUEST['dia5'];
        @$sabados = $_REQUEST['dia6'];
        $dias = array($lunes, $martes, $miercoles, $jueves, $viernes, $sabados);
        $lista = list($l, $m, $mi, $j, $v, $s) = $dias;

        //Recorro las fechas y con la función strotime obtengo los lunes
        for ($i = $fechaInicio; $i <= $fechaFin; $i += 86400) {
            //Sacar el dia de la semana con el modificador N de la funcion date
            $dia = date('N', $i);
            if ($dia == 1 && $l != "") {
                //  echo "Lunes" . date("Y-m-d", $i) .$proyecto->hora1.' '. $proyecto->hora2 . "<br>";

                $proyecto->dia = "Lunes";
                $proyecto->fecha = date("Y-m-d", $i);
                $proyecto->hora1 = $proyecto->hora1;
                $proyecto->hora2 = $proyecto->hora2;
                $proyecto->etapa_id = $_REQUEST['etapa_id'];
                $proyecto->proyecto_id = $_REQUEST['proyecto_id'];
                $registrar = $proyecto->Registrar($proyecto);
            }
            if ($dia == 2 && $m != "") {

                $proyecto->dia = "Martes";
                $proyecto->fecha = date("Y-m-d", $i);
                $proyecto->hora1 = $proyecto->hora1;
                $proyecto->hora2 = $proyecto->hora2;
                $proyecto->etapa_id = $_REQUEST['etapa_id'];
                $proyecto->proyecto_id = $_REQUEST['proyecto_id'];
                $registrar = $proyecto->Registrar($proyecto);
                // echo "Martes" . date("Y-m-d", $i) .$proyecto->hora1.' '. $proyecto->hora2 . "<br>";
            }
            if ($dia == 3 && $mi != "") {
                $proyecto->dia = "Miercoles";
                $proyecto->fecha = date("Y-m-d", $i);
                $proyecto->hora1 = $proyecto->hora1;
                $proyecto->hora2 = $proyecto->hora2;
                $proyecto->etapa_id = $_REQUEST['etapa_id'];
                $proyecto->proyecto_id = $_REQUEST['proyecto_id'];
                $registrar = $proyecto->Registrar($proyecto);
                //echo "Miercoles" . date("Y-m-d", $i) .$proyecto->hora1.' '. $proyecto->hora2 . "<br>";
            }
            if ($dia == 4 && $j != "") {
                $proyecto->dia = "jueves";
                $proyecto->fecha = date("Y-m-d", $i);
                $proyecto->hora1 = $proyecto->hora1;
                $proyecto->hora2 = $proyecto->hora2;
                $proyecto->etapa_id = $_REQUEST['etapa_id'];
                $proyecto->proyecto_id = $_REQUEST['proyecto_id'];
                $registrar = $proyecto->Registrar($proyecto);
                // echo "jueves" . date("Y-m-d", $i) .$proyecto->hora1.' '. $proyecto->hora2 . "<br>";
            }
            if ($dia == 5 && $v != "") {
                $proyecto->dia = "Viernes";
                $proyecto->fecha = date("Y-m-d", $i);
                $proyecto->hora1 = $proyecto->hora1;
                $proyecto->hora2 = $proyecto->hora2;
                $proyecto->etapa_id = $_REQUEST['etapa_id'];
                $proyecto->proyecto_id = $_REQUEST['proyecto_id'];
                $registrar = $proyecto->Registrar($proyecto);
                // echo "Viernes" . date("Y-m-d", $i) .$proyecto->hora1.' '. $proyecto->hora2 . "<br>";
            }
            if ($dia == 6 && $s != "") {
                $proyecto->dia = "Sabado";
                $proyecto->fecha = date("Y-m-d", $i);
                $proyecto->hora1 = $proyecto->hora1;
                $proyecto->hora2 = $proyecto->hora2;
                $proyecto->etapa_id = $_REQUEST['etapa_id'];
                $proyecto->proyecto_id = $_REQUEST['proyecto_id'];
                $registrar = $proyecto->Registrar($proyecto);
                // echo "Sabado" . date("Y-m-d", $i) .$proyecto->hora1.' '. $proyecto->hora2 . "<br>";
            }
        }
    }



    public function Gestion()
    {
        //@session_start();
        $plantillas = new Proyecto();
        $etapa = new Etapa();
        $objetivo = new Objetivo();
        $actividades = new Actividad();
        $proyecto = $this->model->Obtener($_REQUEST['pid']);
        $etapas = $etapa->Listar($_REQUEST['pid']);
        $objetivos = $objetivo->Obj_pro($_REQUEST['pid']);
        $objindex = $objetivo->Obj_index($_REQUEST['pid']);
        $act_pro = $actividades->Act_Pro($_REQUEST['pid']);
        $_SESSION['pid'] = $_REQUEST['pid'];

        require_once 'views/layouts/header.php';
        require_once 'views/proyectos/gestion.php';
        require_once 'views/layouts/footer.php';
    }

    public function Proyecto()
    {
        $plantillas = new Proyecto();
        $etapa = new Etapa();
        $obj = new Objetivo();
        $act = new Actividad();
        $proyecto = $this->model->Obtener($_REQUEST['pid']);
        require_once 'views/plantillas/ver.php';
    }

    //-----------etapas info gestion--------//
    public function Etapa_add()
    {
        /* $etapa = new Etapa();
    $etapas = $etapa->Obtener($_REQUEST['pid']);*/
        require_once 'views/proyectos/etapa_add.php';
    }
    //-----------etapas info gestion--------//

    public function Ver()
    {
        /*$etapa = new Etapa();
           $etapas = $etapa->Obtener($_REQUEST['pid']);*/
        $actividades = new Actividad();
        $act_pro = $actividades->Act_Pro_eta($_REQUEST['val02']);
        $horario=new Etapa_plantilla();
        $horarios = $horario->Listar($_REQUEST['val01'],$_REQUEST['val02']);
        require_once 'views/proyectos/ver.php';
    }

    public function Horario(){

          print_r($_REQUEST['fecha']); print_r($_REQUEST['dia']);
          print_r($_REQUEST['hora1']);  print_r($_REQUEST['hora2']);


    }




}
