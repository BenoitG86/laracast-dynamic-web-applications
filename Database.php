<?php

class Database
{
    public $connection;
    public function __construct($config, $username = 'root', $pwd = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        // $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'] . ';charset=utf8mb4';

        $this->connection = new PDO($dsn, $username, $pwd, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }

    public function query($query, $params = [])
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);

        return $stmt;
    }

}
