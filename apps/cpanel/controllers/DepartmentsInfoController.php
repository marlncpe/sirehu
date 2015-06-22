<?php

namespace Sirehu\Cpanel\Controllers;

use Sirehu\Core\Models\CoreDepartments;
use Sirehu\Core\Models\CoreDepartmentsInfo;


class DepartmentsInfoController extends ControllerBase
{

    public function indexAction()
    {
    }
    public function searchAction()
    {
    	$id = (int) $_GET["id"];
        $this->view->departmentinfos = CoreDepartmentsInfo::find("id_departament='".$id."'"); 
    }
    public function newAction(){
        $id_departament = (int) $_GET["id"];
        $this->view->department = CoreDepartments::findFirstByid($id_departament);
    }
    public function createAction()
    {

        $department = new CoreDepartmentsInfo();   
        
        $department->setIdUser("1");
        $department->setIdDepartament($this->request->getPost("id_department"));
        $department->setTitulo($this->request->getPost("titulo"));
        $department->setFechaCreacion(date("d-m-Y"));

        if (!$department->save()) {
            foreach ($department->getMessages() as $message) {
                $this->flash->error($message);
            }
            $this->flash->success("El servicio del departamento no ha sido creado");
        }else{

            $this->flash->success("El servicio del departamento ha sido creado satifactoriamente");

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

            $department = CoreDepartmentsInfo::findFirstByid($id);
            if (!$department) {
                $this->flash->error("El departamento no ha sido encontrado");

                return $this->dispatcher->forward(array(
                    "module" => "cpanel",
                    "controller" => "department",
                    "action" => "index"
                ));
            }

            $this->view->department = $department;
            $this->view->id = $department->id;
     
            $this->tag->setDefault("id", $department->getId());
            $this->tag->setDefault("titulo", $department->getTitulo());
            
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

        $department = CoreDepartmentsInfo::findFirstByid($id);
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
                "controller" => "departments",
                "action" => "edit",
                "params" => array($department->id)
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
        $department = CoreDepartmentsInfo::findFirstByid($id);
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

