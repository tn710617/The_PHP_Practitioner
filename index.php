<?php
use App\Core\{Router, Request};
require_once 'vendor/autoload.php';
require_once 'core/bootstrap.php';

Router::load('routes.php')->direct(Request::uri(), Request::method());


