<?php

namespace Sirehu\Cpanel\Controllers;

use Sirehu\Core\Models\CoreCharges;


class ChargesController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->charges = CoreCharges::find();
    }
    public function searchAction()
    {
    	$id = (int) $_GET["id"];
        $this->view->charge = CoreCharges::findFirst("id='".$id."'");
        
    }
    public function newAction(){

    }
    public function createAction()
    {
     
        $charge = new CoreCharges();
        
        $charge->setNombre($this->request->getPost("nombre"));
        $charge->setDescripcion($this->request->getPost("descripcion"));
        $charge->setEmail($this->request->getPost("email"));
        if($this->request->hasFiles() == true){
            $uploads = $this->request->getUploadedFiles();
            $isUploaded = false;
            foreach($uploads as $upload){

                $path = 'files/'.md5(uniqid(rand(), true)).'-'.$this->request->getPost("nombre").'';
                ($upload->moveTo($path)) ? $isUploaded = true : $isUploaded = false;
           		$charge->setPicture($path);
            }
        }else{
            die('Debe elegir al menos un archivo para enviar. Intente de Nuevo.');
        }
        $charge->setFechaCreacion(date("d-m-Y"));
        $charge->setFechaModificacion(" ");
        
        

        if (!$charge->save()) {
            foreach ($charge->getMessages() as $message) {
                $this->flash->error($message);
            }
            $this->flash->success("El Departamento no ha sido creado");
        }else{

            $this->flash->success("El Departamento ha sido creado satifactoriamente");

            return $this->dispatcher->forward(array(
            	"module" => "cpanel",
                "controller" => "charges",
                "action" => "index",
            ));
        }
    }
    public function editAction()
    {
        $id = (int) $_GET["id"];
        if (!$this->request->isPost()) {

            $charge = CoreCharges::findFirstByid($id);
            if (!$charge) {
                $this->flash->error("El departamento no ha sido encontrado");

                return $this->dispatcher->forward(array(
                    "module" => "cpanel",
                    "controller" => "charge",
                    "action" => "index"
                ));
            }

            $this->view->id = $charge->id;

            $this->tag->setDefault("id", $charge->getId());
            $this->tag->setDefault("nombre", $charge->getNombre());
            $this->tag->setDefault("descripcion", $charge->getDescripcion());
            $this->tag->setDefault("email", $charge->getEmail());
            $this->tag->setDefault("fecha", $charge->getFechaCreacion());
            
        }
    }
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "charges",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $charge = CoreCharges::findFirstByid($id);
        if (!$charge) {
            $this->flash->error("El departamento no existe " . $id);

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "charges",
                "action" => "index"
            ));
        }

        $charge->setNombre($this->request->getPost("nombre"));
        $charge->setDescripcion($this->request->getPost("descripcion"));
        $charge->setEmail($this->request->getPost("email", "email"));
        $charge->setPicture($charge->getPicture());
        $charge->setFechaCreacion($charge->getFechaCreacion());
        $charge->setFechaModificacion(date("d-m-Y"));
        

        if (!$charge->save()) {

            foreach ($charge->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "charges_info",
                "action" => "edit"
            ));
        }

        $this->flash->success("El departamento fue actualizado con exito");

        return $this->dispatcher->forward(array(
            "module" => "cpanel",
            "controller" => "charges",
            "action" => "index"
        ));

    }
    public function deleteAction()
    {
        $id = (int) $_GET["id"];
        $charge = CoreCharges::findFirstByid($id);
        if (!$charge) {
            $this->flash->error("El departamento no ha sido encontrado");

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "charges",
                "action" => "index"
            ));
        }

        if (!$charge->delete()) {

            foreach ($charge->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "charges",
                "action" => "search"
            ));
        }

        $this->flash->success("departamento ha sido borrado satifactoriamente");

        return $this->dispatcher->forward(array(
            "module" => "cpanel",
            "controller" => "charges",
            "action" => "index"
        ));
    }
    
}

