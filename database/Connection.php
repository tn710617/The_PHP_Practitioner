<?php

class Connection {
    public static function make()
    {
        try {
            return $pdo = new PDO('mysql:host=127.0.0.1;dbname=The_PHP_Practitioner', 'root', '');
        } catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
}