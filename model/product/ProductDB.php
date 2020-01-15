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
        $stmt->execute();
        $result = $stmt->fetch();
        $product = new Product($result["name"],
            $result["price"],
            $result["type"],
            $result["description"],
            $result["image"],
            $result["createdDate"]);
        $product->setId($result["id"]);

        return $product;
    }

    public function getNewestProduct($type)
    {
        if ($type != '') {
            $type = "WHERE type = ".$type;
        }

        $sql = "SELECT TOP 8 * FROM products INNER JOIN categories ON products.type = category.name ".$type." ORDER BY createdDate ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();

        $products = [];
        foreach ($result as $item) {
            $product = new Product($item["name"],
                $item["price"],
                $item["type"],
                $item["description"],
                $item["image"],
                $result["createdDate"]);
            $product->setId($result["id"]);
            array_push($products, $product);
        }
        return $products;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();

        $products = [];
        foreach ($result as $item) {
            $product = new Product($item["name"],
                $item["price"],
                $item["type"],
                $item["description"],
                $item["image"],
                $item["createdDate"]);
            $product->setId($item["id"]);
            array_push($products, $product);
        }
        return $products;
    }

    public function add($product)
    {
        $sql = "INSERT INTO products(name, image, price, type, description, createdDate) VALUES (?,?,?,?,?,?)";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(1, $product->getName());
        $stmt->bindParam(2, $product->getImage());
        $stmt->bindParam(3, $product->getPrice());
        $stmt->bindParam(4, $product->getType());
        $stmt->bindParam(5, $product->getDescription());
        $stmt->bindParam(6, $product->getCreatedDate());
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
        $sql = "UPDATE products SET name = ?, image = ?, price = ?, type = ?, description = ? WHERE id = ?";
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

