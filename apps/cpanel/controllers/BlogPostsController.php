<?php

namespace Sirehu\Cpanel\Controllers;

use Sirehu\Blog\Models\BlogPosts;

class BlogPostsController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->posts = BlogPosts::find();
    }
    public function searchAction()
    {
    	$id = (int) $_GET["id"];
        $this->view->post = BlogPosts::findFirstByid($id);
    }
    public function newAction(){

    }
    public function createAction()
    {
     
        $post = new BlogPosts();
        
        $post->setNombre($this->request->getPost("nombre"));
        $post->setDescripcion($this->request->getPost("descripcion"));
        $post->setEmail($this->request->getPost("email"));
        if($this->request->hasFiles() == true){
            $uploads = $this->request->getUploadedFiles();
            $isUploaded = false;
            foreach($uploads as $upload){

                $path = 'files/'.md5(uniqid(rand(), true)).'-'.$this->request->getPost("nombre").'';
                ($upload->moveTo($path)) ? $isUploaded = true : $isUploaded = false;
           		$post->setPicture($path);
            }
        }else{
            die('Debe elegir al menos un archivo para enviar. Intente de Nuevo.');
        }
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
                "controller" => "posts",
                "action" => "index",
            ));
        }
    }
    public function editAction()
    {
        $id = (int) $_GET["id"];
        if (!$this->request->isPost()) {

            $post = BlogPosts::findFirstByid($id);
            if (!$post) {
                $this->flash->error("El Articulo no ha sido encontrado");

                return $this->dispatcher->forward(array(
                    "module" => "cpanel",
                    "controller" => "post",
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
                "controller" => "posts",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $post = BlogPosts::findFirstByid($id);
        if (!$post) {
            $this->flash->error("El Articulo no existe " . $id);

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "posts",
                "action" => "index"
            ));
        }

        $post->setNombre($this->request->getPost("nombre"));
        $post->setDescripcion($this->request->getPost("descripcion"));
        $post->setEmail($this->request->getPost("email", "email"));
        $post->setPicture($post->getPicture());
        $post->setFechaCreacion($post->getFechaCreacion());
        $post->setFechaModificacion(date("d-m-Y"));
        

        if (!$post->save()) {

            foreach ($post->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "posts_info",
                "action" => "edit"
            ));
        }

        $this->flash->success("El Articulo fue actualizado con exito");

        return $this->dispatcher->forward(array(
            "module" => "cpanel",
            "controller" => "posts",
            "action" => "index"
        ));

    }
    public function deleteAction()
    {
        $id = (int) $_GET["id"];
        $post = BlogPosts::findFirstByid($id);
        if (!$post) {
            $this->flash->error("El Articulo no ha sido encontrado");

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "posts",
                "action" => "index"
            ));
        }

        if (!$post->delete()) {

            foreach ($post->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "posts",
                "action" => "search"
            ));
        }

        $this->flash->success("Articulo ha sido borrado satifactoriamente");

        return $this->dispatcher->forward(array(
            "module" => "cpanel",
            "controller" => "posts",
            "action" => "index"
        ));
    }
    
}

