<?php

namespace Sirehu\Frontend\Controllers;

use Sirehu\Core\Models\CoreDepartments;
use Sirehu\Core\Models\CoreDepartmentsInfo;
use Sirehu\Core\Models\CoreDepartmentsSkills;
use Sirehu\Frontend\Models\WebSliders;
use Sirehu\Blog\Models\BlogPosts;


class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->departamentos = CoreDepartments::find();
    	$this->view->sliders = WebSliders::find(array("order" => "id","limit" => 4));
    	$this->view->posts = BlogPosts::find(array("order" => "id","limit" => 2));
    }
    public function coordinacionAction()
    {
    	$this->view->coordinacion = CoreDepartments::findFirst("id=1");
    	$this->view->coordinacioninfos = CoreDepartmentsInfo::find("id=1");
    	$this->view->coordinacionskills = CoreDepartmentsSkills::find("id=1");

    }
}

