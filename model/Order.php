<?php


class Order
{
    private $connection;

    public $idorder;
    public $client_idclient;
    public $date;
    public $total_qty;
    public $total_amount;
    public $delivary_status;
    public $address;
    public $contact;
    public $status;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create() {
        $query = 'INSERT INTO highwood.order SET client_idclient = ?. date = ?, total_qty = ?, total_amount = ?, delivary_status = ?, address = ?, contact = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->client_idclient);
        $stmt->bindParams(2, $this->date);
        $stmt->bindParams(3, $this->total_qty);
        $stmt->bindParams(4, $this->total_amount);
        $stmt->bindParams(5, $this->delivary_status);
        $stmt->bindParams(6, $this->address);
        $stmt->bindParams(7, $this->contact);
        $stmt->execute();
        return $stmt;
    }

    public function read() {
        $query = 'SELECT * FROM highwood.order';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function read_single() {
        $query = 'SELECT * FROM highwood.order WHERE idorder = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function update() {
        $query = 'UPDATE highwood.order SET client_idclient = ?. date = ?, total_qty = ?, total_amount = ?, delivary_status = ?, address = ?, contact = ?, status = ? WHERE idorder = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->client_idclient);
        $stmt->bindParams(2, $this->date);
        $stmt->bindParams(3, $this->total_qty);
        $stmt->bindParams(4, $this->total_amount);
        $stmt->bindParams(5, $this->delivary_status);
        $stmt->bindParams(6, $this->address);
        $stmt->bindParams(7, $this->contact);
        $stmt->bindParams(7, $this->status);
        $stmt->bindParams(7, $this->idorder);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }

    public function delete() {
        $query = 'DELETE FROM highwood.order WHERE idorder = ?';
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
