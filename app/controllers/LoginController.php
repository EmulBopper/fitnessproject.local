<?php


class LoginController extends ControllerBase
{
    public function indexAction($name = "Катюша")
    {
        $this->view ->setVar('username', $name);
    }
}