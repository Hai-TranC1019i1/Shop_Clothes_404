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
        $products = $this->shopDB->getAll();
        include "view/product/home.php";
    }

    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            include "upload.php";

            $product = new Product($_POST["name"], $_POST["price"], $_POST["type"], $_POST["description"], $target_file);

            if ($isSuccess = $this->shopDB->add($product)) {
                $message = "Add product successful!";
            } else {
                $message = "Something error! Try again!";
            }
        }
        include_once "view/product/add.php";
    }

    public function delete()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET["id"];
            $this->shopDB->getById($id);
        } else {
            $this->shopDB->delete($_POST["id"]);
        }
        include "view/delete.php";

    }

    public function edit()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET["id"];
            $this->shopDB->getById($id);
        } else {
            $product = new Product($_POST["name"], $_POST["price"], $_POST["type"], $_POST["description"], $target_file);
            $product->setId($_POST["id"]);
            $this->shopDB->edit($product);
        }
        include "view/edit.php";
    }
}