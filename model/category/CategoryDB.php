<?php


class CategoryDB
{
    private $db;

    public function __construct()
    {
        $db = new DB();
        $this->db = $db->connection();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM categories";
        $stmt = $this->db->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $category = new Category($item['name'], $item['description']);
            $category->setId($item['id']);
            array_push($arr, $category);
        }
        return $arr;
    }

    public function add($category)
    {
        $sql = "INSERT INTO categories(name ,description) VALUE (?, ?)";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(1, $category->getName());
        $stmt->bindParam(2, $category->getDescription());
        return $stmt->execute();
    }

    public function delete($id)
    {
        var_dump($id);
        $sql = "DELETE FROM category WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }

    public function getId($id)
    {
        $sql = "SELECT * FROM category WHERE  id = $id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();

        $category = new Category($result["name"], $result["description"]);
        $category->setId($id);

        return $category;
    }

    public function edit($category)
    {
        $sql = "UPDATE category SET name = ?, description = ? WHERE  id = ?";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(1,$category->getName());
        $stmt->bindParam(2,$category->getDescription());
        $stmt->bindParam(3,$category->getId());
        $stmt->execute();
    }
}