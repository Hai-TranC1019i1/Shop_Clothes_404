<?php


class OrderDB
{
    private $conn;

    public function __construct()
    {
        $db = new DB();
        $this->conn = $db->connection();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM oders";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item){
            $order = new Order($item['orderDate'],$item['status'],$item['comment'],$item['customerNumber']);
            array_push($arr,$order);
        }
        return $arr;
    }
    public function add($order)
    {
        $sql = "INSERT INTO orders(orderDate,status,comments,customerNumber) VALUES (:orderDate,:status,:comments,:customerNumber)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':orderDate',$order->getOrderDate());
        $stmt->bindParam(':status',$order->getStatus());
        $stmt->bindParam(':comments',$order->getComments());
        $stmt->bindParam(':customerNumber',$order->getCustomerNumber());
        $stmt->execute();
    }
}