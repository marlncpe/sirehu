<?php

namespace Sirehu\Servimed\Controllers;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        //$this->view->departamentos = CoreDepartments::find();
        $this->view->departaments = $this->pruebaAction;
    }

}

