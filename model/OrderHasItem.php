<?php


class OrderHasItem
{
    private $connection;

    public $idorder_has_item;
    public $order_idorder;
    public $item_iditem;
    public $amount;
    public $qty;
    public $total_amount;
    public $status;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create() {
        $query = 'INSERT INTO order_has_item SET order_idorder = ?, item_iditem = ?, amount = ?, qty = ?, total_amount = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParmas(1, $this->order_idorder);
        $stmt->bindParmas(2, $this->item_iditem);
        $stmt->bindParmas(3, $this->amount);
        $stmt->bindParmas(4, $this->qty);
        $stmt->bindParmas(5, $this->total_amount);
        $stmt->execute();
        return $stmt;
    }

    public function read() {
        $query = 'SELECT * FROM order_has_item';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function read_single() {
        $query = 'SELECT * FROM order_has_item WHERE idorder_has_item = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idorder_has_item);
        $stmt->execute();
        return $stmt;
    }

    public function update() {
        $query = 'UPDATE order_has_item SET order_idorder = ?, item_iditem = ?, amount = ?, qty = ?, total_amount = ? WHERE idorder_has_item';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParmas(1, $this->order_idorder);
        $stmt->bindParmas(2, $this->item_iditem);
        $stmt->bindParmas(3, $this->amount);
        $stmt->bindParmas(4, $this->qty);
        $stmt->bindParmas(5, $this->total_amount);
        $stmt->bindParams(6, $this->idorder_has_item);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }

    public function delete() {
        $query = 'DELETE FROM order_has_item WHERE idorder_has_item = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idorder_has_item);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }
}
