<?php


class Router {
public $routes;
public function define ($routes)
{
    $this->routes = $routes;
}

public function direct ($uri)
{
    $uri = trim($uri, '/');
    if(array_key_exists($uri, $this->routes))
    {
        return $this->routes[$uri];
    }
    throw new Exception('Could not connect');
}
}