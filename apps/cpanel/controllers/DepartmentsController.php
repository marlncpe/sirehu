<?php

namespace Sirehu\Cpanel\Controllers;

use Sirehu\Core\Models\CoreDepartments;

class DepartmentsController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->departments = CoreDepartments::find();
    }

    public function newAction(){

    }
    public function createAction()
    {
     
        $department = new CoreDepartments();
        
        $department->setNombre($this->request->getPost("nombre"));
        $department->setDescripcion($this->request->getPost("descripcion"));
        $department->setEmail($this->request->getPost("email"));
        if($this->request->hasFiles() == true){
            $uploads = $this->request->getUploadedFiles();
            $isUploaded = false;
            foreach($uploads as $upload){

                $path = 'files/'.md5(uniqid(rand(), true)).'-'.$this->request->getPost("nombre").'';
                ($upload->moveTo($path)) ? $isUploaded = true : $isUploaded = false;
           		$department->setPicture($path);
            }
        }else{
            die('Debe elegir al menos un archivo para enviar. Intente de Nuevo.');
        }
        $department->setFechaCreacion(date("d-m-Y"));
        $department->setFechaModificacion(" ");
        
        

        if (!$department->save()) {
            foreach ($department->getMessages() as $message) {
                $this->flash->error($message);
            }
            $this->flash->success("El Departamento no ha sido creado");
        }else{

            $this->flash->success("El Departamento ha sido creado satifactoriamente");

            return $this->dispatcher->forward(array(
            	"module" => "cpanel",
                "controller" => "departments",
                "action" => "index",
            ));
        }
    }
}

