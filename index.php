<?php
require_once 'functions.php';
require_once 'Task.php';
$query = require_once 'bootstrap.php';

$tasks = $query->selectAll('mytodo', 'Task');


require_once 'index.view.php';
