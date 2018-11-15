<?php
require_once 'functions.php';
require_once 'Task.php';


$pdo = connectToDb();
$statement = $pdo->prepare('select * from mytodo');
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

require_once 'index.view.php';
