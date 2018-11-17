<?php
$query = require_once 'core/bootstrap.php';

$tasks = $query->selectAll('mytodo');

require_once 'view/index.view.php';
