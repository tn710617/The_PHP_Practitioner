<?php
function dd ($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function connectToDb()
{
    try {
        return $pdo = new PDO('mysql:host=127.0.0.1;dbname=The_PHP_Practitioner', 'root', '');
    } catch (PDOException $e)
    {
        die($e->getMessage());
    }
}

function fetchAllTask ($pdo)
{
    $statement = $pdo->prepare('select * from mytodo');
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
