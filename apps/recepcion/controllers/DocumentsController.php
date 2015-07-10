<?php

namespace Sirehu\Recepcion\Controllers;

use Sirehu\Recepcion\Models\Documents;

class DocumentsController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->documents = Documents::find();
    }
     public function searchAction()
    {
        $id = (int) $_GET["id"];
        $this->view->document = documents::findFirstByid($id);
    }
    public function newAction(){

    }
    public function createAction()
    {
     
        $post = new documents();
        
        $post->setIdCategory("1");
        $post->setIddocument("1");
        $post->setTitulo($this->request->getPost("titulo"));
        $post->setResumen($this->request->getPost("resumen"));
        $post->setDescripcion($this->request->getPost("descripcion"));
        $post->setTags($this->request->getPost("tags"));
        $post->setIdUrlImg("0");
        $post->setIdStatus("1");
        $post->setFechaCreacion(date("d-m-Y"));
        $post->setFechaModificacion(" ");
            

        if (!$post->save()) {
            foreach ($post->getMessages() as $message) {
                $this->flash->error($message);
            }
            $this->flash->success("El Articulo no ha sido creado");
        }else{

            $this->flash->success("El Articulo ha sido creado satifactoriamente");

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "documents",
                "action" => "index",
            ));
        }
    }
    public function editAction()
    {
        $id = (int) $_GET["id"];
        if (!$this->request->isPost()) {

            $document = documents::findFirstByid($id);
            if (!$document) {
                $this->flash->error("El Usuario no ha sido encontrado");

                return $this->dispatcher->forward(array(
                    "module" => "cpanel",
                    "controller" => "documents",
                    "action" => "index"
                ));
            }

            $this->view->id = $document->id;

            $this->tag->setDefault("id", $document->getId());
            $this->tag->setDefault("nombres", $document->getNombres());
            $this->tag->setDefault("apellidos", $document->getApellidos());
            $this->tag->setDefault("correo", $document->getEmail());
            $this->tag->setDefault("cedula", $document->getCedula());

        }
    }
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "documents",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $document = documents::findFirstByid($id);
        if (!$document) {
            $this->flash->error("El Articulo no existe " . $id);

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "documents",
                "action" => "index"
            ));
        }

       
        $document->setUsuario($document->getUsuario());
        $document->setClave($document->getClave());
        $document->setCedula($this->request->getPost("cedula"));
        $document->setNombres($this->request->getPost("nombres"));
        $document->setApellidos($this->request->getPost("apellidos"));
        $document->setEmail($this->request->getPost("correo"));
        $document->setFoto($document->getFoto());
        $document->setIdCargo($document->getIdCargo());
        $document->setIdPermiso($document->getIdPermiso());
        $document->setIdStatus($document->getIdStatus());
        $document->setFechaCreacion($document->getFechaCreacion());
        $document->setFechaModificacion(date("d-m-Y"));


        if (!$document->save()) {

            foreach ($post->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "documents",
                "action" => "edit"
            ));
        }

        $this->flash->success("El Usuario fue actualizado con exito");

        return $this->dispatcher->forward(array(
            "module" => "cpanel",
            "controller" => "documents",
            "action" => "index"
        ));
    
    }
    public function deleteAction()
    {
        $id = (int) $_GET["id"];
        $post = documents::findFirstByid($id);
        if (!$post) {
            $this->flash->error("El Usuario no ha sido encontrado");

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "documents",
                "action" => "index"
            ));
        }

        if (!$post->delete()) {

            foreach ($post->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "documents",
                "action" => "search"
            ));
        }

        $this->flash->success("Usuario ha sido borrado satifactoriamente");

        return $this->dispatcher->forward(array(
            "module" => "cpanel",
            "controller" => "documents",
            "action" => "index"
        ));
    }      
}

