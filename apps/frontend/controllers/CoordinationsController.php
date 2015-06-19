<?php

namespace Sirehu\Frontend\Controllers;

use Sirehu\Core\Models\CoreDepartments;
use Sirehu\Core\Models\CoreDepartmentsInfo;
use Sirehu\Core\Models\CoreDepartmentsSkills;
use Sirehu\Core\Models\CoreUsersStaff;



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
    	$this->view->coordinacioninfos = CoreDepartmentsInfo::find("id_departament='".$departament."'");
    	$this->view->coordinacionskills = CoreDepartmentsSkills::find("id_departamento='".$departament."'");
        $this->view->staffs = CoreUsersStaff::find("id_department='".$departament."'");

    }
}

