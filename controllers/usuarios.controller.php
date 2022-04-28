<?php
require_once 'models/Auth.php';
require_once 'models/Usuario.php';

class UsuariosController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Usuario();
    }
    public function Index()
    {
        require_once 'views/layouts/login.php';
        require_once 'views/usuarios/login.php';
    }
    public function Login()
    {

        $seguridad = new Auth(); 
        $clave = md5($_REQUEST['clave']);
        $datos = $seguridad->Auth($_REQUEST['usuario'], $clave );
        
        if(!empty($datos)):
            session_start();
            $_SESSION['uid']=$datos->id;
            $_SESSION['REMOTE_ADDR'] = $_SERVER['REMOTE_ADDR'];
            $_SESSION['HTTP_USER_AGENT'] = $_SERVER['HTTP_USER_AGENT'];
            $_SESSION['fullName']=$datos->nombres.' '.$datos->apellidos;

            echo "<script type='text/javascript'>
                window.location.href = '?c=clientes&a=index';
                </script>";
             
        else:
            echo "<script>
                  alert('LOS DATOS INGRESADOS NO ESTA REGISTRADOS. TRATA DE NUEVO');
              window.locaction.href ='../Proyectos'
                  </script>";
            
        
        endif;

        

    }
}
