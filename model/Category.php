<?php

class Category
{
    private $connection;

    public $idcategory;
    public $name;
    public $status;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    function create()
    {
        $query = 'INSERT INTO category SET name = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->name);
        return $stmt->execute();
    }

    function read()
    {
        $query = 'SELECT * FROM category';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function read_single()
    {
        $query = 'SELECT * FROM category WHERE idcategory = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idcategory);
        $stmt->execute();
        return $stmt;
    }

    function update()
    {
        $query = 'UPDATE category SET name = ?, status = ? WHERE idcategory = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idcategory);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }

    function delete()
    {
        $query = 'DELETE FROM category WHERE idcategory = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idcategory);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }
}
