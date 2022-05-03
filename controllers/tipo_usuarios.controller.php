<?php
require_once 'models/Auth.php';
require_once 'models/Tipo_usuario.php';

class TipousuariosController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Tipousuario();
    }
    
    
}
