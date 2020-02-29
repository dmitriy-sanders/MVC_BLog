<?php

namespace app\controllers;

use app\models\MainModel;
use core\mvc\Controller;


class MainController extends Controller
{
    public function indexAction()
    {
        $mainModelObj = new MainModel();
        $products = $mainModelObj->getAllPosts();
        [$hits, $new] = $products;

        $this->setData(compact("hits", "new"));
    }
}