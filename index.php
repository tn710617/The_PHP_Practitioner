<?php
require_once 'functions.php';
require_once 'Task.php';
require_once 'database/Connection.php';


$pdo = Connection::make();
$tasks = fetchAllTask($pdo);

require_once 'index.view.php';
