<?php


class Size
{
    private $connection;

    public $idsize;
    public $desc;
    public $status;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    function create() {
        $query = 'INSERT INTO highwood.size SET size.desc = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->desc);
        $stmt->execute();
        return $stmt;
    }

    function read() {
        $query = 'SELECT * FROM highwood.size';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idsize);
        $stmt->execute();
        return $stmt;
    }

    function read_single() {
        $query = 'SELECT * FROM highwood.size WHERE idsize = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idsize);
        $stmt->execute();
        return $stmt;
    }

    function update() {
        $query = 'UPDATE highwood.size SET size.desc = ?, status = ? WHERE idsize = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->desc);
        $stmt->bindParams(1, $this->status);
        $stmt->bindParams(1, $this->idsize);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }

    function delete() {
        $query = 'DELETE FROM highwood.size WHERE idsize = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idsize);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }
}
