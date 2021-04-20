<?php


class BlogImage
{
    private $connection;

    public $idblog_image;
    public $path;
    public $status;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create()
    {
        $query = 'INSERT INTO blog_image SET blog_image.path = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->path);
        $stmt->execute();
        return $stmt;
    }

    public function read()
    {
        $query = 'SELECT * FROM blog_image';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function read_single()
    {
        $query = 'SELECT * FROM blog_image WHERE idblog_image = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idblog_image);
        $stmt->execute();
        return $stmt;
    }

    public function update()
    {
        $query = 'UPDATE blog_image SET blog_image.path = ? WHERE idblog_image = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->path);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }

    public function delete()
    {
        $query = 'DELETE FROM blog_image WHERE idblog_image = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idblog_image);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }
}
