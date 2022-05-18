<?php
require_once 'models/Auth.php';
require_once 'models/Soporte.php';

class SoportesController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Soporte();
    }

    public function Crud()
    {
        $soporte = new Soporte();
        if (isset($_REQUEST['id'])) {
            $soportes = $this->model->Obtener($_REQUEST['id']);
        };
        require_once 'views/soportes/crud.php';
    }

    public function Guardar()
    {
        //sleep(10);
        $soporte = new Soporte();

        $nombre=mt_rand(1,10000000);
         // get details of the uploaded file 1
        $fileTmpPath = $_FILES['soporte']['tmp_name'];
        $fileName = $_FILES['soporte']['name'];
        $fileSize = $_FILES['soporte']['size'];
        $fileType = $_FILES['soporte']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        $newFileName = 'soporte_' .$nombre.'.'.$fileExtension;

        $allowedfileExtensions = array('docx', 'pdf');
        if (in_array($fileExtension, $allowedfileExtensions)) {

            // directory in which the uploaded file will be moved
            $uploadFileDir = 'views/soportes/files/';
                                    
            $dest_path = $uploadFileDir . $newFileName;
            if (!file_exists($uploadFileDir)) {
                mkdir($uploadFileDir, 0777, true);
            }
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                 $message = 'El archivo se cargó correctamente.';
            } else {
                $message = 'Hubo algún error al mover el archivo al directorio de carga. Asegúrese de que el servidor web pueda escribir en el directorio de carga.';
            }
        }
        date_default_timezone_set('America/Bogota');
        @$soporte->id = $_REQUEST['id'];
         $soporte->horario_id = $_REQUEST['horario_id'];
         $soporte->ruta_soporte = $dest_path;
         $soporte->fecha_reg = date('Y-m-d h:i:s a', time());;

          $soporte->id > 0 
     ? $this->model->Actualizar($soporte)
     : $this->model->Registrar($soporte);

  echo"
  <script>
    window.history.back();
  </script>
  
  ";



    }
}