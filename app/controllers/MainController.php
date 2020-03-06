<?php

namespace app\controllers;

use app\models\MainModel;
use app\models\Products;
use core\App;
use core\mvc\Controller;


class MainController extends Controller
{
    public function indexAction()
    {
        $mainModelObj = new Products();
        $products = $mainModelObj->getAllProducts();
        [$hits, $new] = $products;

        $currency = App::$app->getProperty("currency");
        $this->setData(compact("hits", "new", "currency"));
    }
}