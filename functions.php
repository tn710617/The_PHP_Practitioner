<?php
function dd ($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}


function fetchAllTask ($pdo)
{
    $statement = $pdo->prepare('select * from mytodo');
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
