<?php

namespace core;

use app\Exceptions\ExceptionHandler;
use core\mvc\Model;

class App
{
    public static $app;

    public function __construct()
    {
        session_start();
        $url = $_SERVER['QUERY_STRING'];
        self::$app = Registry::getInstance();
        Router::makeUrl($url);
        new ExceptionHandler();
    }
}