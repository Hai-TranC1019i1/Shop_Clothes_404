<?php

namespace Controller;

use Category;
use CategoryDB;

class CategoryController
{
    private $categoryDB;

    public function __construct()
    {
        $this->categoryDB = new CategoryDB();
    }

    public function index()
    {
        $categories = $this->categoryDB->getAll();
        include "view/category/list.php";
    }

    public function add()
    {

        include "view/category/add.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $category = new Category($_POST['name'], $_POST['description']);
            var_dump($category);
            $this->categoryDB->add($category);
        }
    }

    public function delete()
    {
        $id = $_GET['id'];
       $category = $this->categoryDB->getId($id);
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $id = $_POST["id"];
           $this->categoryDB->delete($id);
       };
        include 'view/category/delete.php';

    }

    public function edit()
    {
        $id = $_GET["id"];
        $category = $this->categoryDB->getId($id);

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
                $category = new Category($_POST["name"], $_POST["description"]);
                $category->setId($_POST["id"]);
                $this->categoryDB->edit($category);
        }
        include "view/category/edit.php";
    }
}