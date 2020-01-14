<?php


class categoryDB
{
    private $db;

    public function __construct()
    {
        $db = new DB();
        $this->db = $db->connection();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM category";
        $stmt = $this->db->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $category = new category($item['shirt'], $item['trousers'], $item['shoes'], $item['accessories']);
            $category->setId($item['id']);
            array_push($arr, $category);
        }
        return $arr;
    }
}