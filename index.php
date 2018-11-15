<?php
require_once 'functions.php';

require_once 'index.view.php';

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=The_PHP_Practitioner', 'root', '');
} catch (PDOException $e)
{
    die('could not connect');
}

$statement = $pdo->prepare('select * from mytodo');
$statement->execute();
var_dump($statement->fetchAll());
