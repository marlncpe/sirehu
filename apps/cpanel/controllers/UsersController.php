<?php

namespace Sirehu\Cpanel\Controllers;

use Sirehu\Core\Models\CoreUsers;


class UsersController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->users = CoreUsers::find();
    }
    public function searchAction()
    {
    	$id = (int) $_GET["id"];
        $this->view->post = CoreUsers::findFirstByid($id);
    }
    public function newAction(){

    }
    public function createAction()
    {
     
        $post = new CoreUsers();
        
        $post->setIdCategory("1");
        $post->setIdUser("1");
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
                "controller" => "users",
                "action" => "index",
            ));
        }
    }
    public function editAction()
    {
        $id = (int) $_GET["id"];
        if (!$this->request->isPost()) {

            $post = CoreUsers::findFirstByid($id);
            if (!$post) {
                $this->flash->error("El Articulo no ha sido encontrado");

                return $this->dispatcher->forward(array(
                    "module" => "cpanel",
                    "controller" => "users",
                    "action" => "index"
                ));
            }

            $this->view->id = $post->id;

            $this->tag->setDefault("id", $post->getId());
            $this->tag->setDefault("id_category", $post->getIdCategory());
            $this->tag->setDefault("titulo", $post->getTitulo());
            $this->tag->setDefault("descripcion", $post->getDescripcion());
            $this->tag->setDefault("resumen", $post->getResumen());
            $this->tag->setDefault("tags", $post->getTags());
            $this->tag->setDefault("urlimg", $post->getIdUrlImg());
            $this->tag->setDefault("status", $post->getIdStatus());
            $this->tag->setDefault("fecha", $post->getFechaCreacion());
 
        }
    }
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "users",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $post = CoreUsers::findFirstByid($id);
        if (!$post) {
            $this->flash->error("El Articulo no existe " . $id);

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "users",
                "action" => "index"
            ));
        }

        $post->setIdCategory($post->getIdCategory());
        $post->setTitulo($this->request->getPost("titulo"));
        $post->setResumen($this->request->getPost("resumen"));
        $post->setDescripcion($this->request->getPost("descripcion"));
        $post->setTags($this->request->getPost("tags"));
        $post->setIdUrlImg($post->getIdUrlImg());
        $post->setIdStatus($post->getIdStatus());
        $post->setFechaCreacion($post->getFechaCreacion());
        $post->setFechaModificacion(date("d-m-Y"));
        


        if (!$post->save()) {

            foreach ($post->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "users",
                "action" => "edit"
            ));
        }

        $this->flash->success("El Articulo fue actualizado con exito");

        return $this->dispatcher->forward(array(
            "module" => "cpanel",
            "controller" => "users",
            "action" => "index"
        ));
    
    }
    public function deleteAction()
    {
        $id = (int) $_GET["id"];
        $post = CoreUsers::findFirstByid($id);
        if (!$post) {
            $this->flash->error("El Articulo no ha sido encontrado");

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "users",
                "action" => "index"
            ));
        }

        if (!$post->delete()) {

            foreach ($post->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "users",
                "action" => "search"
            ));
        }

        $this->flash->success("Articulo ha sido borrado satifactoriamente");

        return $this->dispatcher->forward(array(
            "module" => "cpanel",
            "controller" => "users",
            "action" => "index"
        ));
    }
    
}

