<?php


class CommentDB
{
    private $conn;

    public function __construct()
    {
        $db = new DB();
        $this->conn = $db->connection();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM comments";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item){
            $comment = new Comment($item['username'],$item['createdDate'],$item['content']);
            array_push($arr,$comment);
        }
        return $arr;
    }

    public function add($comment)
    {
        $sql = "INSERT INTO comments (username,createdDate,content) VALUES (:username,:createdDate,:content)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':username',$comment->getUsername());
        $stmt->bindParam(':createdDate',$comment->getCreatedDate());
        $stmt->bindParam(':content',$comment->getContent());
    }

    public function getId($id)
    {
        $sql = "SELECT * FROM comments WHERE id = $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        $comment = new Comment($result['username'],$result['createdDate'],$result['content']);
        $comment->setId($id);
        return $comment;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM comments WHERE id = $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}