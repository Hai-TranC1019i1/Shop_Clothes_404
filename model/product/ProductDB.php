<?php

class ProductDB
{
    private $db;

    public function __construct()
    {
        $db = new DB();
        $this->db = $db->connection();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $id);
        $result = $stmt->fetch();
        return new Product($result["name"], $result["price"], $result["type"], $result["description"], $result["image"]);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();

        $products = [];
        foreach ($result as $item) {
            $product = new Product($item["name"], $item["price"], $item["type"], $item["description"], $item["image"]);
            array_push($products, $product);
        }
        return $products;
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
        return $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }

    public function edit($product)
    {
        $sql = "UPDATE FROM products SET name = ?, image = ?, price = ?, type = ?, description = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(1, $product->getName());
        $stmt->bindParam(2, $product->getImage());
        $stmt->bindParam(3, $product->getPrice());
        $stmt->bindParam(4, $product->getType());
        $stmt->bindParam(5, $product->getDescription());
        $stmt->bindParam(6, $product->getId());

        return $stmt->execute();
    }

}

