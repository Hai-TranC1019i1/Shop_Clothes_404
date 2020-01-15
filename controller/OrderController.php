<?php


class OrderController
{
    private $oderDB;

    public function __construct()
    {
        $this->oderDB = new OrderDB();
    }

    public function index()
    {
        $orders = $this->oderDB->getAll();
        include "view/oder/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET"){
            include "view/oder/add.php";
        }elseif ($_SERVER['REQUEST_METHOD'] == "POST"){
            $order = new Order($_POST['orderDate'],$_POST['status'],$_POST['comments'],$_POST['customerNumber']);
            $this->oderDB->add($order);
        }
    }
}