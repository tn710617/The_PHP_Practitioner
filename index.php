<?php
use App\Core\{Router, Request};
require_once 'vendor/autoload.php';
require_once 'core/bootstrap.php';

Router::load('app/routes.php')->direct(Request::uri(), Request::method());


