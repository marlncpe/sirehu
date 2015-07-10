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
        $charge->setFechaCreacion(date("d-m-Y"));
        
        

        if (!$charge->save()) {
            foreach ($charge->getMessages() as $message) {
                $this->flash->error($message);
            }
            $this->flash->success("El cargo no ha sido creado");
        }else{

            $this->flash->success("El cargo ha sido creado satifactoriamente");

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
                $this->flash->error("El cargo no ha sido encontrado");

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
            $this->flash->error("El cargo no existe " . $id);

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "charges",
                "action" => "index"
            ));
        }

        $charge->setNombre($this->request->getPost("nombre"));
        $charge->setDescripcion($this->request->getPost("descripcion"));
        $charge->setFechaCreacion($charge->getFechaCreacion());
        

        if (!$charge->save()) {

            foreach ($charge->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "charges",
                "action" => "edit"
            ));
        }

        $this->flash->success("El cargo fue actualizado con exito");

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
            $this->flash->error("El cargo no ha sido encontrado");

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

        $this->flash->success("cargo ha sido borrado satifactoriamente");

        return $this->dispatcher->forward(array(
            "module" => "cpanel",
            "controller" => "charges",
            "action" => "index"
        ));
    }
    
}

