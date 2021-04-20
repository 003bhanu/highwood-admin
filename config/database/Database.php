<?php


class Database
{
    private $databaseName = 'highwood';
    private $host = 'localhost';
    private $username = 'root';
    private $password = "";
    private $connection;

    function getConnction()
    {
        $this->connection = null;

        try {
            $this->connection = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->databaseName, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
            $this->connection->exec("set names UTF8");
        } catch (PDOException $exception) {
            echo 'Database connction error: start - ' . $exception->getMessage() . ' - end';
        }

        return $this->connection;
    }
}

