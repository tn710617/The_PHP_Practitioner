<?php
$query = require_once 'core/bootstrap.php';

require_once Router::load('routes.php')->direct(Request::uri());
