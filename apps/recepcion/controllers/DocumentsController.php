<?php

namespace Sirehu\recepcion\Controllers;

use Sirehu\Blog\Models\Documents;

class DocumentsController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->documents = Documents::find();
    }
    public function searchAction()
    {
    	$id = (int) $_GET["id"];
        $this->view->documents = Documents::findFirstByid($id);
    }
    public function newAction(){

    }
    public function createAction()
    {
     
        $documents = new Documents();
        
        $documents->setIdCategory("1");
        $documents->setIdUser("1");
        $documents->setTitulo($this->request->getPost("titulo"));
        $documents->setResumen($this->request->getPost("resumen"));
        $documents->setDescripcion($this->request->getPost("descripcion"));
        $documents->setTags($this->request->getPost("tags"));
        $documents->setIdUrlImg("0");
        $documents->setIdStatus("1");
        $documents->setFechaCreacion(date("d-m-Y"));
        $documents->setFechaModificacion(" ");
            

        if (!$documents->save()) {
            foreach ($post->getMessages() as $message) {
                $this->flash->error($message);
            }
            $this->flash->success("El Documento no ha sido creado");
        }else{

            $this->flash->success("El Documento ha sido creado satifactoriamente");

            return $this->dispatcher->forward(array(
            	"module" => "recepcion",
                "controller" => "documents",
                "action" => "index",
            ));
        }
    }
    public function editAction()
    {
        $id = (int) $_GET["id"];
        if (!$this->request->isPost()) {

            $documents = Documents::findFirstByid($id);
            if (!$documents) {
                $this->flash->error("El Documento no ha sido encontrado");

                return $this->dispatcher->forward(array(
                    "module" => "recepcion",
                    "controller" => "documents",
                    "action" => "index"
                ));
            }

            $this->view->id = $documents->id;

            $this->tag->setDefault("id", $documents->getId());
            $this->tag->setDefault("id_category", $documents->getIdCategory());
            $this->tag->setDefault("titulo", $documents->getTitulo());
            $this->tag->setDefault("descripcion", $documents->getDescripcion());
            $this->tag->setDefault("resumen", $documents->getResumen());
            $this->tag->setDefault("tags", $documents->getTags());
            $this->tag->setDefault("urlimg", $documents->getIdUrlImg());
            $this->tag->setDefault("status", $documents->getIdStatus());
            $this->tag->setDefault("fecha", $documents->getFechaCreacion());
 
        }
    }
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "module" => "recepcion",
                "controller" => "documents",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $documents = Documents::findFirstByid($id);
        if (!$documents) {
            $this->flash->error("El Documento no existe " . $id);

            return $this->dispatcher->forward(array(
                "module" => "recepcion",
                "controller" => "documents",
                "action" => "index"
            ));
        }

        $documents->setIdCategory($post->getIdCategory());
        $documents->setTitulo($this->request->getPost("titulo"));
        $documents->setResumen($this->request->getPost("resumen"));
        $documents->setDescripcion($this->request->getPost("descripcion"));
        $documents->setTags($this->request->getPost("tags"));
        $documents->setIdUrlImg($post->getIdUrlImg());
        $documents->setIdStatus($post->getIdStatus());
        $documents->setFechaCreacion($post->getFechaCreacion());
        $documents->setFechaModificacion(date("d-m-Y"));
        


        if (!$documents->save()) {

            foreach ($documents->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "module" => "recepcion",
                "controller" => "documents",
                "action" => "edit"
            ));
        }

        $this->flash->success("El Documento fue actualizado con exito");

        return $this->dispatcher->forward(array(
            "module" => "recepcion",
            "controller" => "documents",
            "action" => "index"
        ));
    
    }
    public function deleteAction()
    {
        $id = (int) $_GET["id"];
        $documents = Documents::findFirstByid($id);
        if (!$documents) {
            $this->flash->error("El Documento no ha sido encontrado");

            return $this->dispatcher->forward(array(
                "module" => "recepcion",
                "controller" => "documents",
                "action" => "index"
            ));
        }

        if (!$documents->delete()) {

            foreach ($documents->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "module" => "recepcion",
                "controller" => "documents",
                "action" => "search"
            ));
        }

        $this->flash->success("Documento ha sido borrado satifactoriamente");

        return $this->dispatcher->forward(array(
            "module" => "recepcion",
            "controller" => "documents",
            "action" => "index"
        ));
    }
    
}

