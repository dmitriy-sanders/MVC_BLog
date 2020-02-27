<?php

namespace app\controllers;

use app\models\MainModel;
use core\mvc\Controller;


class MainController extends Controller
{
    public function indexAction()
    {
        $mainModelObj = new MainModel();
        $posts = $mainModelObj->getAllPosts();

        $this->setData(compact("posts"));
    }
}