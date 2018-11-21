<?php

//dd($config['database']['dbname']);
class Connection {

    public static function make($config)
    {
        try
        {
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