<?php

namespace app\controllers;

use core\mvc\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {

    }

    public function loginAction()
    {
        $login = $_POST['login'] ?? null;
        $password = $_POST['password'] ?? null;
        $remember = $_POST['remember'] ?? null;

        if($login == "admin") {
            exit();
        }else{
            exit("Пользователя с таким логином не существует!");
        }
    }
}