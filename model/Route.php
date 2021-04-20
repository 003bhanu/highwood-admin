<?php


class Route
{
    private $connection;

    public $idroute;
    public $desc;
    public $status;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create()
    {
        $query = 'INSERT INTO route SET route.desc = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->desc);
        $stmt->execute();
        return $stmt;
    }

    public function read()
    {
        $query = 'SELECT * FROM route';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function read_single()
    {
        $query = 'SELECT * FROM route WHERE idroute = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idroute);
        $stmt->execute();
        return $stmt;
    }

    public function update()
    {
        $query = 'UPDATE route SET route.desc = ?, status = ? WHERE idroute = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->desc);
        $stmt->bindParams(2, $this->status);
        $stmt->bindParams(3, $this->idroute);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }

    public function delete()
    {
        $query = 'DELETE FROM route WHERE idroute = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idroute);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }
}
