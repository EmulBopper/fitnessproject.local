<?php

use Phalcon\Mvc\Model;

class Users extends Model
{
    public $id;

    public $login;

    public $email;

    public $password;

    public $created_at;

}