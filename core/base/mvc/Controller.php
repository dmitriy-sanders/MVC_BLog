<?php

namespace core\mvc;

use app\views\currency\Currency;
use core\App;

abstract class Controller
{
    protected $route;
    protected $controller;
    protected $view;
    protected $data = [];
    protected $meta;
    protected $layout = "default";

    public function __construct(array $route)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->view = $route['action'];

        // Getting Currencies
        $currObj = new Currency();

        $currencies = $currObj->getCurrencies();
        App::$app->setProperty("currencies", $currencies);

        $currency = $currObj->getCurrency($currencies);
        App::$app->setProperty("currency", $currency);
    }

    public function getView()
    {
        $viewObj = new View($this->view, $this->layout, $this->meta, $this->controller);
        $viewObj->renderHTML($this->data);
    }

    protected function setData($data)
    {
        $this->data = array_merge($data, $this->data);
    }

    protected function setMeta($title = "", $keywords = "", $desc = "")
    {
        $this->meta = ["title" => $title, "keywords" => $keywords, "desc" => $desc];
    }

    protected function isAJAX()
    {
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === "XMLHttpRequest") {
            return true;
        }
        return false;
    }

    public function loadView($view, $vars = [])
    {
        extract($vars);
        require_once VIEWS . "/{$this->controller}/{$view}.php";
        exit;
    }
}