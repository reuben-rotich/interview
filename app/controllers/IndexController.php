<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
       $this->view->messages = messages::find();
    }

}

