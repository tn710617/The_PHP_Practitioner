<?php
$users= $app['database']->selectAll('user');

require_once 'view/index.view.php';
