<?php

//dd($config['database']['dbname']);
class Connection {

    public static function make($config)
    {
        try
        {
//            return $pdo = new PDO('mysql:host=127.0.0.1;dbname=The_PHP_Practitioner', 'root', '');
            return $pdo = new PDO(
                $config['connection'] . ';dbname=' . $config['dbname'],
                $config['username'],
                $config['password'],
                $config['options']
            );

        } catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
}