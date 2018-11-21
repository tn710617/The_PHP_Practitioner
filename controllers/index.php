<?php
$tasks = $app['database']->selectAll('mytodo');

require_once 'view/index.view.php';
