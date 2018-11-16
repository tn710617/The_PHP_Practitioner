<?php
require_once 'functions.php';
require_once 'Task.php';
require_once 'database/Connection.php';
require_once 'database/QueryBuilder.php';


$pdo = Connection::make();
$query = new QueryBuilder($pdo);
$tasks = $query->selectAll('mytodo');

require_once 'index.view.php';
