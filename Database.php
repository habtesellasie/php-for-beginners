<?php

class Database
{
    public $connection;

    public function __construct($config, $username = 'root', $password = '')
    {

        // http_build_query returns host=localhost;dbname=laracast_db;charset=utf8mb4
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password);
    }

    public function query($query, $params = [])
    {
        $statment = $this->connection->prepare($query);
        $statment->execute($params);

        return $statment;
    }
}
