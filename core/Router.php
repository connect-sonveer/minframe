<?php

namespace MinFrame\Core;
use Exception;
use MinFrame\Controllers\UsersController;
use MinFrame\Controllers\PagesController;

class Router 
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if(array_key_exists($uri, $this->routes[$requestType])) {
            $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        } else {
            throw new Exception("No Route defined for this URI");
        }
    }

    private function callAction($controller, $action)
    {
        $controller = "MinFrame\\Controllers\\{$controller}";
        $controller = new $controller;
        if(!method_exists($controller, $action)){
            throw new Exception(
                "{$controller} does not respond to {$action} action."
            );
        }   
        return $controller->$action();
    }
}