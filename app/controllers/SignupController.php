<?php

use Phalcon\Mvc\Controller;

class SignupController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function registerAction()
    {
        $user = new Users();

        // Сохраняем и проверяем на наличие ошибок
        $user->created_at = date('Y-m-d H:i:s');
        $success = $user->save($this->request->getPost(), array('login', 'email', 'password'));



        if ($success) {
            echo "Спасибо за регистрацию!";
        } else {
            echo "К сожалению, возникли следующие проблемы: ";
            foreach ($user->getMessages() as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }

        $this->view->disable();
    }
}