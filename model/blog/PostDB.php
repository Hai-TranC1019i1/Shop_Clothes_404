<?php


class PostDB
{
    private $conn;

    public function __construct()
    {
        $db = new DB();
        $this->conn = $db->connection();
    }

    public function getList()
    {
        $sql = "SELECT * FROM posts";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $posts = new Post($item['title'], $item['content'], $item['created']);
            $posts->setId($item['id']);

            array_push($arr, $posts);
        }
        return $arr;
    }

    public function add($post)
    {
        $sql = "INSERT INTO posts (title, content, created) VALUES (:title, :content, :created)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':title', $post->getTitle());
        $stmt->bindParam(':content', $post->getContent());
        $stmt->bindParam(':created', $post->getCreated());
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM posts WHERE id= $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
//
//    public function edit($id)
//    {
//        $sql = "UPDATE FROM posts SET title = ?, content = ? WHERE id = $id ";
//        $stmt = $this->conn->prepare($sql);
//        $stmt->bindParam(1, $post->getTitle()>);
//        $stmt->execute();
//    }

    public function edit($post,$id)
    {

        $sql = "UPDATE posts SET title = :title, content = :content, created = :created
                WHERE id=$id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':title', $post->getTitle());
        $stmt->bindParam(':content', $post->getContent());
        $stmt->bindParam(':created', $post->getCreated());
        $stmt->execute();
    }

    public function getValue($id)
    {
        $sql = "SELECT * FROM posts WHERE id= $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return new Post($result["title"],$result["content"], $result["created"], $id);
    }
}