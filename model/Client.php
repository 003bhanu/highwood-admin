<?php


class Client
{
    private $connection;

    public $idclient;
    public $name;
    public $org;
    public $contact_1;
    public $contact_2;
    public $email;
    public $address;
    public $username;
    public $password;
    public $tracker;
    public $status;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create() {
        $query = 'INSERT INTO client SET client.name = ?, org = ?, contact_1 = ?, contact_2 = ?, email = ?, address = ?, username = ?, password = ?, tracker = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->name);
        $stmt->bindParams(2, $this->org);
        $stmt->bindParams(3, $this->contact_1);
        $stmt->bindParams(4, $this->contact_2);
        $stmt->bindParams(5, $this->email);
        $stmt->bindParams(6, $this->address);
        $stmt->bindParams(7, $this->username);
        $stmt->bindParams(8, $this->password);
        $stmt->bindParams(9, $this->tracker);
        $stmt->execute();
        return $stmt;
    }

    public function read() {
        $query = 'SELECT * FROM client';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function read_single() {
        $query = 'SELECT * FROM category WHERE idcategory = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idclient);
        $stmt->execute();
        return $stmt;
    }

    public function update() {
        $query = 'UPDATE client SET client.name = ?, org = ?, contact_1 = ?, contact_2 = ?, email = ?, address = ?, username = ?, password = ?, tracker = ?, status = ? WHERE idclient = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->name);
        $stmt->bindParams(2, $this->org);
        $stmt->bindParams(3, $this->contact_1);
        $stmt->bindParams(4, $this->contact_2);
        $stmt->bindParams(5, $this->email);
        $stmt->bindParams(6, $this->address);
        $stmt->bindParams(7, $this->username);
        $stmt->bindParams(8, $this->password);
        $stmt->bindParams(9, $this->tracker);
        $stmt->bindParams(10, $this->status);
        $stmt->bindParams(11, $this->idclient);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }

    public function delete() {
        $query = 'DELETE FROM client WHERE idclient = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idclient);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }
}
