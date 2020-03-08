<?php

namespace app\controllers;

use app\models\Cabinet;
use core\App;
use core\mvc\Controller;

class CabinetController extends Controller
{
    public $module = "user";

    public function indexAction()
    {
        $userObj = new Cabinet();
        $user = $userObj->getUserData();
        $module = $this->module;

        $this->setData(compact("module", "user"));
    }

    public function logoutAction()
    {
        setcookie("user", "", time()-1, "/");
        unset($_SESSION['user']);
        redirect("/");
    }
}