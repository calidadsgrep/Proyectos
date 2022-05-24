<?php
require_once 'models/Auth.php';
require_once 'models/Plantilla.php';
require_once 'models/Etapa.php';
require_once 'models/Objetivo.php';
require_once 'models/Actividad.php';
require_once 'models/Proyecto.php';
require_once 'models/Usuario.php';
require_once 'models/Etapa_plantilla.php';
require_once 'models/Horario.php';
require_once 'models/Cliente.php';



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
		//print_r($proyectos);
		require_once 'views/layouts/header.php';
		require_once 'views/proyectos/index.php';
		require_once 'views/layouts/footer.php';
	}

	public function Etapa_index()
	{   $plantillas = new Proyecto();
		$proyectos = $this->model->Listar();
		
		$etapa = new Etapa();
		
		$plantillas = $this->model->Obtener($_REQUEST['pid']);
		$etapas = $etapa->Listar($plantillas->plantilla_id);
		$etapasActs = $etapa->Etapa_act($plantillas->plantilla_id);
		//print_r($etapasActs);
		require_once 'views/proyectos/etapa_index.php';
	}


	public function Crud()
	{

		$cliente0 = new Cliente();
		$clientes = $cliente0->Listar();
		//print_r($clientes);
		$plantilla0 = new Plantilla();
		$plantillas = $plantilla0->Listar();
		$proyectos = new Proyecto();
		if (isset($_REQUEST['id'])) {
			$proyectos = $this->model->Obtener($_REQUEST['id']);
		}
		require_once 'views/proyectos/crud.php';
	}


	public function Registrar0(){	

		$proyectos = new Proyecto();
		$proyectos->id = $_REQUEST['id'];
		$proyectos->nombre  = $_REQUEST['nombre'];
		$proyectos->fecha_inicio = $_REQUEST['fecha_inicio'];
		$proyectos->fecha_cierre = $_REQUEST['fecha_cierre'];
		$proyectos->cliente_id = $_REQUEST['cliente_id'];
	    $proyectos->plantilla_id = $_REQUEST['plantilla_id'];
	    
		$proyectos->id > 0 
		   ? $proyec =$proyectos->Actualizar($proyectos)
		   : $proyec =$proyectos->Registrar0($proyectos); 
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
	   
		$etapas = $etapa->Listar($proyecto->plantilla_id);
		$objetivos = $objetivo->Obj_pro($proyecto->plantilla_id);
		$objindex = $objetivo->Obj_index($proyecto->plantilla_id);
		$act_pro = $actividades->Act_Pro($proyecto->plantilla_id);
		$_SESSION['pid'] =  $proyecto->plantilla_id;

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
		$horario = new Etapa_plantilla();
		$horarios = $horario->Listar($_REQUEST['val01'], $_REQUEST['val02']);
		require_once 'views/proyectos/ver.php';
	}
	public function Ver_gestion()
	{
		/*$etapa = new Etapa();
           $etapas = $etapa->Obtener($_REQUEST['pid']);*/
		$actividades = new Actividad();
		$asignaciones = new Horario();
		$act_pro = $actividades->Act_Pro_eta($_REQUEST['val02']);
		/*HORARIOS  ASIGNADOS*/
		$asignacion = $asignaciones->Asignado($_REQUEST['val01'], $_REQUEST['val02']);
		/*echo'<pre>';
		print_r($asignacion); 
		echo'</pre>';*/
		require_once 'views/proyectos/ver_gestion.php';
	}
	public function Horario()
	{
		$horario = new Horario();
		$fecha =	 $_REQUEST['fecha'];
		$dia =	$_REQUEST['dia'];
		$hora1 =	$_REQUEST['hora1'];
		$hora2 =	$_REQUEST['hora2'];
		$actividad =	$_REQUEST['actividad_id'];
		$etapa = $_REQUEST['etapa_plantilla_id'];
		$proyecto_id = $_REQUEST['proyecto_id'];
		$estado = $_REQUEST['estado'];
		$check = $_REQUEST['check'];
		if ($check != '') {
			foreach ($check as $key => $value) :
				$horario->fecha = $fecha[$value];
				$horario->dia = $dia[$value];
				$horario->actividad_id = $actividad[$value];
				$horario->hora1 = $hora1[$value];
				$horario->hora2 = $hora2[$value];
				$horario->etapa_plantilla_id = $etapa;
				$horario->proyecto_id = $proyecto_id;
				$horario->estado = $estado;
				$horario->Registrar($horario);


			endforeach;
		}
	}
}
