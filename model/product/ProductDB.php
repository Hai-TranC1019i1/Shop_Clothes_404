<?php

class ProductDB
{
    private $db;

    public function __construct()
    {
        $db = new DB();
        $this->db = $db->connection();
    }

    public function getById()
    {

    }

    public function getAll()
    {

    }

    public function add($product)
    {
        $sql = "INSERT INTO products(name, image, price, type, description) VALUES (?,?,?,?,?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $product->getName());
        $stmt->bindParam(2, $product->getImage());
        $stmt->bindParam(3, $product->getPrice());
        $stmt->bindParam(4, $product->getType());
        $stmt->bindParam(5, $product->getDescription());

        $stmt->execute();
    }

}

