<?php
require_once 'models/Auth.php';
require_once 'models/Usuario.php';
require_once 'models/Tipo_usuario.php';

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

    public function Home()
    {
        require_once 'views/layouts/header.php';
        require_once 'views/usuarios/home.php';
        require_once 'views/layouts/footer.php';
    }

    public function Cerrar()
    {
        session_start();
        session_reset();
        session_destroy();
        header('Location: ../Proyectos');
        
    }
    public function Login()
    {

        $seguridad = new Auth();
        $clave = md5($_REQUEST['clave']);
        $datos = $seguridad->Auth($_REQUEST['usuario'], $clave);

        if (!empty($datos)) :
            session_start();
            $_SESSION['uid'] = $datos->id;
            $_SESSION['REMOTE_ADDR'] = $_SERVER['REMOTE_ADDR'];
            $_SESSION['HTTP_USER_AGENT'] = $_SERVER['HTTP_USER_AGENT'];
            $_SESSION['fullName'] = $datos->nombres . ' ' . $datos->apellidos;

            echo "<script type='text/javascript'>
                window.location.href = '?c=usuarios&a=home';
                </script>";

        else :
            echo "<script type='text/javascript'>
                  alert('LOS DATOS INGRESADOS NO ESTA REGISTRADOS. TRATA DE NUEVO');
              window.locaction.href ='proyectos/'
                  </script>";


        endif;
    }

    public function Usuarios()
    {
        $tipoUsuario = new Tipousuario;
        $tipoUsuarios = $tipoUsuario->Tipos_usuarios();
        $usuarios= $this->model->Listar();
        require_once 'views/layouts/header.php';
        require_once 'views/usuarios/index.php';
        require_once 'views/layouts/footer.php';
    }

    public function Crud()
    {
        $usuario = new Usuario;
        $tipoUsuario = new Tipousuario;
        $tipoUsuarios = $tipoUsuario->Tipos_usuarios();
        if (isset($_REQUEST['id'])) {
            $usuario=  $this->model->Obtener($_REQUEST['id']);
             //   print_r($usuario);
        }
        require_once 'views/usuarios/crud.php';
    }
    public function Registrar()
    {
        $usuario = new Usuario;
        $usuario->id = $_REQUEST['id'];
        $usuario->tipo_identificacion = $_REQUEST['tipo_identificacion'];
        $usuario->num_identificacion = $_REQUEST['num_identificacion'];
        $usuario->nombres = $_REQUEST['nombres'];
        $usuario->apellidos = $_REQUEST['apellidos'];
        $usuario->telefono = $_REQUEST['telefono'];
        $usuario->correo = $_REQUEST['correo'];
        $usuario->usuario = $_REQUEST['num_identificacion'];
        $usuario->clave = md5($_REQUEST['num_identificacion']);
        $usuario->estado = $_REQUEST['estado'];
        $usuario->tipo_usuario = $_REQUEST['tipo'];
        $usuario->created = $_REQUEST['created'];
        $usuario->modified = $_REQUEST['modified'];

        $usuario->id > 0 ?
              $this->model->Actualizar($usuario)
            : $this->model->Registrar($usuario);
    }

    public function Actualizar()
    {

        $usuario = new Usuario;
        $usuario->clave = md5($_REQUEST['num_identificacion']);
        $usuario->estado = $_REQUEST['estado'];
        $usuario->tipo_usuario = $_REQUEST['tipo_usuario '];
    }
    public function Borrar()
    {

        $tipoUsuario = new Tipousuario;
        $tipoUsuarios = $tipoUsuario->Tipos_usuarios();
        require_once 'views/usuarios/add.php';
    }
}
