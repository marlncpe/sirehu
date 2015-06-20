<?php

namespace Sirehu\Cpanel\Controllers;

use Sirehu\Core\Models\CoreDepartments;

class DepartmentsController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->departments = CoreDepartments::find();
    }

}

