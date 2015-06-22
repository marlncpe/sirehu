<?php

namespace Sirehu\Cpanel\Controllers;

use Sirehu\Core\Models\CoreDepartments;
use Sirehu\Core\Models\CoreDepartmentsInfo;


class DepartmentsController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->departments = CoreDepartments::find();
    }
    public function searchAction()
    {
    	$id = (int) $_GET["id"];
        $this->view->department = CoreDepartments::findFirst("id='".$id."'");
        $this->view->departmentinfos = CoreDepartmentsInfo::find("id_departament='".$id."'");
        
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
    public function editAction()
    {
        $id = (int) $_GET["id"];
        if (!$this->request->isPost()) {

            $department = CoreDepartments::findFirstByid($id);
            if (!$department) {
                $this->flash->error("El departamento no ha sido encontrado");

                return $this->dispatcher->forward(array(
                    "module" => "cpanel",
                    "controller" => "department",
                    "action" => "index"
                ));
            }

            $this->view->id = $department->id;

            $this->tag->setDefault("id", $department->getId());
            $this->tag->setDefault("nombre", $department->getNombre());
            $this->tag->setDefault("descripcion", $department->getDescripcion());
            $this->tag->setDefault("email", $department->getEmail());
            $this->tag->setDefault("fecha", $department->getFechaCreacion());
            
        }
    }
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "departments",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $department = CoreDepartments::findFirstByid($id);
        if (!$department) {
            $this->flash->error("El departamento no existe " . $id);

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "departments",
                "action" => "index"
            ));
        }

        $department->setNombre($this->request->getPost("nombre"));
        $department->setDescripcion($this->request->getPost("descripcion"));
        $department->setEmail($this->request->getPost("email", "email"));
        $department->setPicture($department->getPicture());
        $department->setFechaCreacion($department->getFechaCreacion());
        $department->setFechaModificacion(date("d-m-Y"));
        

        if (!$department->save()) {

            foreach ($department->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "departments_info",
                "action" => "edit"
            ));
        }

        $this->flash->success("El departamento fue actualizado con exito");

        return $this->dispatcher->forward(array(
            "module" => "cpanel",
            "controller" => "departments",
            "action" => "index"
        ));

    }
    public function deleteAction()
    {
        $id = (int) $_GET["id"];
        $department = CoreDepartments::findFirstByid($id);
        if (!$department) {
            $this->flash->error("El departamento no ha sido encontrado");

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "departments",
                "action" => "index"
            ));
        }

        if (!$department->delete()) {

            foreach ($department->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "departments",
                "action" => "search"
            ));
        }

        $this->flash->success("departamento ha sido borrado satifactoriamente");

        return $this->dispatcher->forward(array(
            "module" => "cpanel",
            "controller" => "departments",
            "action" => "index"
        ));
    }
    
}

