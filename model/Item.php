<?php


class Item
{
    private $connection;

    public $iditem;
    public $sub_category_idsub_category;
    public $size_idsize;
    public $material_idmaterial;
    public $color_idcolor;
    public $image_idimage;
    public $name;
    public $price;
    public $qty;
    public $status;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    function create()
    {
        $query = 'INSERT INTO item SET sub_category_idsub_category = ?, size_idsize = ?, $material_idmaterial = ?, $color_idcolor = ?, 
                $image_idimage = ?, item.name = ?, price = ?, qty = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->sub_category_idsub_category);
        $stmt->bindParams(2, $this->size_idsize);
        $stmt->bindParams(3, $this->material_idmaterial);
        $stmt->bindParams(4, $this->color_idcolor);
        $stmt->bindParams(5, $this->image_idimage);
        $stmt->bindParams(6, $this->name);
        $stmt->bindParams(7, $this->price);
        $stmt->bindParams(8, $this->qty);
        $stmt->bindParams(9, $this->sub_category_idsub_category);
        $stmt->execute();
        return $stmt;
    }

    function read()
    {
        $query = 'SELECT * FROM item';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function read_single()
    {
        $query = 'SELECT * FROM item WHERE iditem = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->iditem);
        $stmt->execute();
        return $stmt;
    }

    function update()
    {
        $query = 'UPDATE item SET sub_category_idsub_category = ?, size_idsize = ?, $material_idmaterial = ?, $color_idcolor = ?, 
                $image_idimage = ?, item.name = ?, price = ?, qty = ?, status = ? WHERE iditem = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->sub_category_idsub_category);
        $stmt->bindParams(2, $this->size_idsize);
        $stmt->bindParams(3, $this->material_idmaterial);
        $stmt->bindParams(4, $this->color_idcolor);
        $stmt->bindParams(5, $this->image_idimage);
        $stmt->bindParams(6, $this->name);
        $stmt->bindParams(7, $this->price);
        $stmt->bindParams(8, $this->qty);
        $stmt->bindParams(9, $this->sub_category_idsub_category);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }

    function delete()
    {
        $query = 'DELETE FROM item WHERE iditem = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParams(1, $this->iditem);
        if($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s. \n", $stmt->error);
            return false;
        }
    }
}
