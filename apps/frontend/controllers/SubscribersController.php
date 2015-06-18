<?php

namespace Sirehu\Frontend\Controllers;

use Sirehu\Frontend\Models\WebSubscribers;

class SubscribersController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function createAction()
    {
     
        $subscriber = new WebSubscribers();
        $subscriber->setCorreo($this->request->getPost("correo"));
        $subscriber->setFechaCreacion(date("d-m-Y"));
        
        

        if (!$subscriber->save()) {
            foreach ($subscriber->getMessages() as $message) {
                $this->flash->error($message);
            }
            $this->flash->success("La Solicitud no ha sido creada satifactoriamente");
        }else{

            $this->flash->success("La Solicitud ha sido creada satifactoriamente");

            return $this->dispatcher->forward(array(
                "controller" => "subscribers",
                "action" => "index"
            ));
        }
    }
}

