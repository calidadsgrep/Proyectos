<?php
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
        $_REQUEST['usuario'];
        $hash = password_hash($_REQUEST['usuario'], PASSWORD_DEFAULT);

        if (password_verify($_REQUEST['usuario'], $hash)) {
            echo '¡La contraseña es válida!';
        } else {
            echo 'La contraseña no es válida.';
        }
    }
}
