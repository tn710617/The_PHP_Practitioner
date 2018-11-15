<?php
require_once 'functions.php';
require_once 'Task.php';


try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=The_PHP_Practitioner', 'root', '');
} catch (PDOException $e)
{
    die($e->getMessage());
}

$statement = $pdo->prepare('select * from mytodo');
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

require_once 'index.view.php';
