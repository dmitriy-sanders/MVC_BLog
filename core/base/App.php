<?php

namespace core;

class App
{
    public function __construct()
    {
        session_start();
        $url = $_SERVER['QUERY_STRING'];
        Router::makeUrl($url);
    }
}