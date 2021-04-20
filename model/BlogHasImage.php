<?php


class BlogHasImage
{
    private $connection;

    public $idblog_has_image;
    public $blog_idblog;
    public $image_idimage;
    public $type;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create() {
        $query = 'INSERT INTO blog_has_image SET blog_idblog = ?, image_idimage = ?, $type = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->blog_idblog);
        $stmt->bindParams(2, $this->image_idimage);
        $stmt->bindParams(3, $this->type);
        $stmt->execute();
        return $stmt;
    }

    public function read() {
        $query = 'SELECT * FROM blog_has_item';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function read_single() {
        $query = 'SELECT * FROM blog_has_item WHERE idblog_has_image = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idblog_has_image);
        $stmt->execute();
        return $stmt;
    }

    public function update() {
        $query = 'UPDATE blog_has_item SET blog_idblog = ?, image_idimage = ?, blog_has_item.type = ? WHERE idblog_has_image = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->blog_idblog);
        $stmt->bindParams(2, $this->image_idimage);
        $stmt->bindParams(3, $this->type);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }

    public function delete() {
        $query = 'DELETE FROM blog_has_item WHERE idblog_has_image = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idblog_has_image);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }
}
