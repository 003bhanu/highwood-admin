<?php


class Blog
{
    private $connection;

    public $idblog;
    public $title;
    public $data_sum;
    public $data;
    public $status;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create()
    {
        $query = 'INSERT INTO blog SET data_sum = ?, title = ? blog.data = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->data_sum);
        $stmt->bindParams(2, $this->title);
        $stmt->bindParams(3, $this->data);
        $stmt->execute();
        return $stmt;
    }

    public function read()
    {
        $query = 'SELECT * FROM blog';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function read_single()
    {
        $query = 'SELECT * FROM blog WHERE idblog = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idblog);
        $stmt->execute();
        return $stmt;
    }

    public function update()
    {
        $query = 'UPDATE category SET data_sum = ?, title = ? blog.data = ?, status = ? WHERE idblog = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->data_sum);
        $stmt->bindParams(2, $this->title);
        $stmt->bindParams(3, $this->data);
        $stmt->bindParams(4, $this->status);
        $stmt->bindParams(5, $this->idblog);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }

    public function delete()
    {
        $query = 'DELETE FROM blog WHERE idblog = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idblog);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }
}


