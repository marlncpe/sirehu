<?php

namespace Sirehu\Blog\Controllers;

use Phalcon\Mvc\Controller;
use Sirehu\Core\Models\CoreDepartments;

class ControllerBase extends Controller
{
	protected function index(){
		$this->view->menudepartamentos = CoreDepartments::find();
	}

}