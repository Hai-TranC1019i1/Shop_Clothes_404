<?php


class UserDB
{
    private $conn;

    public function __construct()
    {
        $db = new DB();
        $this->conn = $db->connection();
    }

    public function  register($user)
    {
        $sql = "INSERT INTO users (name, password, email) VALUE (:name, :password, :email)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':name', $user->getUsername());
        $stmt->bindParam(':password', $user->getpassword());
        $stmt->bindParam(':email', $user->getEmail());
        $stmt->execute();
    }

    public function getValue()
    {
        $sql = "SELECT * FROM users ";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $user = new User($item['username'], $item['password'], $item['email']);
            array_push($arr, $user);
        }
        return $arr;
    }

    public function login(){
        $sql = "SELECT * FROM users WHERE name ='" . $_POST["username"] . "' and  password = '". $_POST["password"]."'";
        $stmt = $this->conn->query($sql);
        return $stmt;
    }


}

