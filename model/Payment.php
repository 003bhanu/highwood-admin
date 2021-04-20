<?php


class Payment
{
    private $connection;

    public $idpayment;
    public $order_idorder;
    public $desc;
    public $amount;
    public $image;
    public $date;
    public $tatus;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create() {
        $query = 'INSERT INTO payment SET order_idorder = ?, payment.desc = ?, amount = ? image = ? payment.date = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->order_idorder);
        $stmt->bindParams(2, $this->desc);
        $stmt->bindParams(3, $this->amount);
        $stmt->bindParams(4, $this->image);
        $stmt->bindParams(5, $this->date);
        $stmt->execute();
        return $stmt;
    }

    public function read() {
        $query = 'SELECT * FROM payment';
        $stmt = $this->connection->prepare($query);
        return $stmt;
    }

    public function read_single() {
        $query = 'SELECT * FROM payment WHERE idpayment = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idpayment);
        $stmt->execute();
        return $stmt;
    }

    public function update() {
        $query = 'UPDATE payment SET order_idorder = ?, payment.desc = ?, amount = ? image = ? payment.date = ? WHERE idpayment = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->order_idorder);
        $stmt->bindParams(2, $this->desc);
        $stmt->bindParams(3, $this->amount);
        $stmt->bindParams(4, $this->image);
        $stmt->bindParams(5, $this->date);
        $stmt->bindParams(6, $this->idpayment);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }

    public function delete() {
        $query = 'DELETE FROM payment WHERE idpayment = ?';
        $stmt = $this->connection->prepare($query);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }
}
