<?php
use App\Core\App;

require_once 'functions.php';
App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view ($name, $data = [])
{
    extract($data);
    return require_once "app/view/{$name}.view.php";
}

function redirect ($location)
{
    return header("Location: /$location");
}
