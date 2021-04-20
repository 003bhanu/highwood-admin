<?php


class ItemImage
{
    private $connection;

    public $iditem_image;
    public $path;
    public $status;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    function create() {
        $query = 'INSERT INTO image SET image.path = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->iditem_image);
        $stmt->execute();
        return $stmt;
    }

    function read() {
        $query = 'SELECT * FROM image';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function read_single() {
        $query = 'SELECT * FROM image WHERE iditem_image = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->iditem_image);
        $stmt->execute();
        return $stmt;
    }

    function update() {
        $query = 'UPDATE image SET image.path = ?, status = ? WHERE iditem_image = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->path);
        $stmt->bindParams(2, $this->status);
        $stmt->bindParams(3, $this->iditem_image);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }

    function delete() {
        $query = 'DELETE FROM image WHERE iditem_image = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->iditem_image);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }
}
