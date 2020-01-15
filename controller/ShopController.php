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
        include_once "home.php";
    }

    public function listNewestProduct()
    {
        $type = $_GET["type"];
        $products = $this->shopDB->getNewestProduct($type);
        include_once "home.php";
    }

    public function getCategories()
    {
        $categoryDB = new CategoryDB();
        return  $categoryDB->getAll();
    }

    public function add()
    {
        $categories = $this->getCategories();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (!empty($_FILES["image"]["name"])) {
                include "upload.php";
            }

            $product = new Product($_POST["name"],
                $_POST["price"],
                $_POST["type"],
                $_POST["description"],
                $target_file,
                $_POST["createdDate"]);

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
            $product =$this->shopDB->getById($id);
        } else {
            $this->shopDB->delete($_POST["id"]);
            header("location: admin.php");
        }
        include "view/product/delete.php";

    }

    public function edit()
    {
        $categories = $this->getCategories();

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET["id"];
            $product = $this->shopDB->getById($id);
        } else {

            if (!empty($_FILES["image"]["name"])) {
                include "upload.php";
            } else {
                $target_file = $_POST["avatar"];
            }

            $product = new Product($_POST["name"],
                $_POST["price"],
                $_POST["type"],
                $_POST["description"],
                $target_file,
                $_POST["createdDate"]);
            $product->setId($_POST["id"]);

            $isSuccess = $this->shopDB->edit($product);

            if ($isSuccess) {
                $message = 'Edit successful!';
            } else {
                $message = "Something error! Retry!";
            }
        }
        include "view/product/edit.php";
    }
}