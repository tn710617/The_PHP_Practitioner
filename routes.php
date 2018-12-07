<?php

$router->get('home', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->post('users', 'UsersController@store');

$router->get('users', 'UsersController@index');
