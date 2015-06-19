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
        parent::index();
        $departament = (int) $_GET["departament"];
    	$this->view->coordinacion = CoreDepartments::findFirst("id='".$departament."'");
    	$this->view->coordinacioninfos = CoreDepartmentsInfo::find("id='".$departament."'");
    	$this->view->coordinacionskills = CoreDepartmentsSkills::find("id='".$departament."'");

    }
}

