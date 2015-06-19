<?php

namespace Sirehu\Frontend\Controllers;

use Sirehu\Core\Models\CoreDepartments;
use Sirehu\Core\Models\CoreDepartmentsInfo;
use Sirehu\Core\Models\CoreDepartmentsSkills;



class CoordinationsController extends ControllerBase
{

    public function indexAction()
    {
    }

    public function searchAction()
    {
    	$this->view->coordinacion = CoreDepartments::findFirst("id=1");
    	$this->view->coordinacioninfos = CoreDepartmentsInfo::find("id=1");
    	$this->view->coordinacionskills = CoreDepartmentsSkills::find("id=1");

    }
}

