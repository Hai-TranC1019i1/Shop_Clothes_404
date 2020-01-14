<?php


class ShopController
{
    private $shopDB;

    public function __construct()
    {
        $this->shopDB = new ProductDB();
    }

    public function index()
    {

    }

    public function add()
    {
        include "view/add.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            include "upload.php";
            var_dump($_POST["image"]);

            $product = new Product($_POST["name"], $_POST["price"], $_POST["type"], $_POST["description"], $_POST["image"]);
            var_dump($product);
//            $this->shopDB->add($product);
        }
    }
}