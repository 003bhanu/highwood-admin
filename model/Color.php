<?php


class Color
{
    private $connection;

    public $idcolor;
    public $name;
    public $code;
    public $status;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    function create()
    {
        $query = 'INSERT INTO color SET color.name = ?, code = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->name);
        $stmt->bindParams(1, $this->code);
        $stmt->execute();
        return $stmt;
    }

    function read()
    {
        $query = 'SELECT * FROM color';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function read_single()
    {
        $query = 'SELECT * FROM color WHERE idcolor = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idcolor);
        $stmt->execute();
        return $stmt;
    }

    function update()
    {
        $query = 'UPDATE color SET color.name = ?, code = ?, status = ? WHERE idimage = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->name);
        $stmt->bindParams(2, $this->code);
        $stmt->bindParams(3, $this->status);
        $stmt->bindParams(4, $this->idcolor);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }

    function delete()
    {
        $query = 'DELETE FROM color WHERE idicolor = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idcolor);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }
}
