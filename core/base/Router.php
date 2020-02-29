<?php

namespace core;

use app\Exceptions\UndefinedControllerException;
use app\Exceptions\UndefinedMethodException;

class Router
{
    protected static $route = [];
    protected static $routes = [];

    public static function makeUrl($url)
    {
        $url = trim($url, "/");
        if(self::matchUrl($url)) {
//            dep(self::$route);
            $controller = self::getNamespace() . self::$route['controller'] . "Controller";
            $controllerFile = self::makeFilePath(ROOT . "/" . $controller.".php");

            if(file_exists($controllerFile)) {
                $controllerObj = new $controller(self::$route);
                $action = self::$route['action'] . "Action";
                if(method_exists($controllerObj, $action)) {
                    $controllerObj->$action();
                    $controllerObj->getView();
                }else{
                    throw new UndefinedMethodException("Such method <u>$action</u> not found in <b>$controller</b>");
                }
            }else{
                throw new UndefinedControllerException("Such controller is not found <b>$controller</b>");
            }
        }
    }

    public static function addRoute($route = [])
    {
        $way = $route[0];
        $controllerName = $route[1];
        $methodName = $route[2];

        self::$routes[] = ["way" => $way, "controller" => $controllerName, "action" => $methodName];
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    private static function matchUrl($url)
    {
        foreach (self::$routes as $key => $value)
        {
            if(self::$routes[$key]['way'] == $url) {
                self::$route = self::$routes[$key];
                return true;
            }
        }
        return false;
    }

    private static function makeFilePath(string $path)
    {
        $path = str_replace("\\", "/", $path);
        return $path;
    }

    private static function getNamespace()
    {
        $namespace = "app\controllers\\";
        return $namespace;
    }
}