<?php


class Router {
    public $routes;
    public static function load($file)
    {
        $router = new static;
        require_once $file;
        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes))
        {
            return $this->routes[$uri];
        }
        throw new Exception('Could not connect');
    }

}