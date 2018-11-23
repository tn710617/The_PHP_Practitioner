<?php
$app['database']->insert('user', [
    'name' => $_POST['name'],
]);

header ('Location: /');

