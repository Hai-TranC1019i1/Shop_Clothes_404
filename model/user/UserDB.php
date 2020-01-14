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

    public function login($user){
        $sql = "SELECT * FROM users WHERE name = ? or email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $user->getUsername());
        $stmt->bindParam(2, $user->getEmail());
        $stmt->execute();
        $result = $stmt->fetch();

        if ($result["password"] == $user->getPassword()) {
            header("Location: .././index.php");
        } else {
            return "Wrong username or password!";
        }

    }


}

