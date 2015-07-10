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
        $this->view->user = CoreUsers::findFirstByid($id);
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

            $user = CoreUsers::findFirstByid($id);
            if (!$user) {
                $this->flash->error("El Usuario no ha sido encontrado");

                return $this->dispatcher->forward(array(
                    "module" => "cpanel",
                    "controller" => "users",
                    "action" => "index"
                ));
            }

            $this->view->id = $user->id;

            $this->tag->setDefault("id", $user->getId());
            $this->tag->setDefault("nombres", $user->getNombres());
            $this->tag->setDefault("apellidos", $user->getApellidos());
            $this->tag->setDefault("correo", $user->getEmail());
            $this->tag->setDefault("cedula", $user->getCedula());

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

        $user = CoreUsers::findFirstByid($id);
        if (!$user) {
            $this->flash->error("El Articulo no existe " . $id);

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "users",
                "action" => "index"
            ));
        }

       
        $user->setUsuario($user->getUsuario());
        $user->setClave($user->getClave());
        $user->setCedula($this->request->getPost("cedula"));
        $user->setNombres($this->request->getPost("nombres"));
        $user->setApellidos($this->request->getPost("apellidos"));
        $user->setEmail($this->request->getPost("correo"));
        $user->setFoto($user->getFoto());
        $user->setIdCargo($user->getIdCargo());
        $user->setIdPermiso($user->getIdPermiso());
        $user->setIdStatus($user->getIdStatus());
        $user->setFechaCreacion($user->getFechaCreacion());
        $user->setFechaModificacion(date("d-m-Y"));


        if (!$user->save()) {

            foreach ($post->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "module" => "cpanel",
                "controller" => "users",
                "action" => "edit"
            ));
        }

        $this->flash->success("El Usuario fue actualizado con exito");

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
            $this->flash->error("El Usuario no ha sido encontrado");

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

        $this->flash->success("Usuario ha sido borrado satifactoriamente");

        return $this->dispatcher->forward(array(
            "module" => "cpanel",
            "controller" => "users",
            "action" => "index"
        ));
    }
    
}

