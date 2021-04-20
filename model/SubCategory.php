<?php


class SubCategory
{
    private $connection;

    public $idsub_category;
    public $category_idcateogry;
    public $name;
    public $status;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    function create()
    {
        $query = 'INSERT INTO sub_category SET $category_idcategory = ?, sub_category.name = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->category_idcateogry);
        $stmt->bindParams(2, $this->name);
        $stmt->execute();
        return $stmt;
    }

    function read()
    {
        $query = 'SELECT * FROM sub_category';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function read_single()
    {
        $query = 'SELECT * FROM sub_category WHERE idsub_category = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idsub_category);
        $stmt->execute();
        return $stmt;
    }

    function update()
    {
        $query = 'UPDATE sub_category SET $category_idcategory = ?, sub_category.name = ?, SET status = ? WHERE idsub_category = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->category_idcateogry);
        $stmt->bindParams(2, $this->name);
        $stmt->bindParams(3, $this->status);
        $stmt->bindParams(4, $this->idsub_category);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }

    function delete()
    {
        $query = 'DELETE FROM sub_category WHERE idsub_cateogry = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->idsub_category);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }
}
