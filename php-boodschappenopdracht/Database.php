<?php

class Database {
    private $credentials;
    private $pdo;
    private $dsn;

    public function __construct($credentials)  {
        $this->credentials = $credentials;
        $this->dsn = "mysql:host={$credentials["host"]};port={$credentials["port"]};dbname={$credentials["dbname"]}";
        $this->pdo = new PDO($this->dsn, $credentials["user"], $credentials["pass"], [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    } 

    public function query($currentQuery, $params) {
        $statement = $this->pdo->prepare($currentQuery);
        $statement->execute($params);
        return $statement;
    }
}