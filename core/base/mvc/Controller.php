<?php

namespace core\mvc;

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
}