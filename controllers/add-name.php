<?php
App::get('database')->insert('user', [
    'name' => $_POST['name'],
]);

header ('Location: /');

