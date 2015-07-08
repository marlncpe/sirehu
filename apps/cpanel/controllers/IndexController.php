<?php

namespace Sirehu\Cpanel\Controllers;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $this->session->set('userid',"asdsadS");
        $this->session->set('usernames',"asdadasdas");
        $this->session->set('userlast',"fefes");
        $this->session->set('userpicture',"43434o");
    }

}

