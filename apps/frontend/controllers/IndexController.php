<?php

namespace Sirehu\Frontend\Controllers;

use Sirehu\Core\Models\CoreDepartments;


class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->departamentos = CoreDepartments::find();
        //$this->view->departaments = $this->pruebaAction;
    }

}

