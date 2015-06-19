<?php

namespace Sirehu\Frontend\Controllers;

use Sirehu\Core\Models\CoreDepartments;
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
    public function coordinacionesAction()
    {

    }
}

