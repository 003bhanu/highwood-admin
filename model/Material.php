<?php


class Material
{
    private $connection;

    public $idmaterial;
    public $desc;
    public $status;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    function create() {
        $query = 'INSERT INTO material SET material.desc = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->desc);
        $stmt->execute();
        return $stmt;
    }

    function read() {
        $query = 'SELECT * FROM material';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function read_single() {
        $query = 'SELECT * FROM material WHERE idmaterial = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idmaterial);
        $stmt->execute();
        return $stmt;
    }

    function update() {
        $query = 'UPDATE material SET material.desc = ?, status = ? WHERE idmaterial = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->desc);
        $stmt->bindParams(2, $this->idmaterial);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }

    function delete() {
        $query = 'DELETE FROM material WHERE idmaterial = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idmaterial);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }
}
