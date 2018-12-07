<?php


class Router {
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;
        require_once $file;
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
        if (array_key_exists($uri, $this->routes[$requestType]))
        {
            return $this->callAction(...explode('@',$this->routes[$requestType][$uri]));
        }
        throw new Exception('Could not connect');
    }

    public function callAction ($controller, $action)
    {
        if (! method_exists($controller, $action))
        {
            throw new Exception(
                "{$controller} does not response to {$action} action"
            );
        }
        $controller = new $controller;
        return $controller->$action();
    }
}