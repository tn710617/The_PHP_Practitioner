<?php
require_once 'functions.php';
App::bind('config', require 'config.php');
dd(App::get('config'));

$app ['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);

