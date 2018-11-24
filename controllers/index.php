<?php
$users= App::get('database')->selectAll('user');

require_once 'view/index.view.php';
