<?php

namespace core;

use app\Exceptions\ExceptionHandler;

class App
{
    public function __construct()
    {
        session_start();
        $url = $_SERVER['QUERY_STRING'];
        Router::makeUrl($url);
        new ExceptionHandler();
    }
}