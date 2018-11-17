<?php
require_once 'functions.php';
require_once 'core/Router.php';

$router = new Router;

require_once 'routes.php';
require_once $router->direct($_SERVER['REQUEST_URI']);
