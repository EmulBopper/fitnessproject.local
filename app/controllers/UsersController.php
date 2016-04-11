<?php

class UsersController extends ControllerBase
{
    public function indexAction() {
        $user = Users::findfirst(1);
        $this->view->setVar('user', $user);
    }
}