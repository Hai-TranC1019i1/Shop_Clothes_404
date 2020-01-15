<?php

namespace Controller;

use category;
use categoryDB;

class CategoryController
{
    private $categoryDB;

    public function __construct()
    {
        $this->categoryDB = new categoryDB();
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
            $category = new Category($_POST['name'],$_POST['description']);
            var_dump($category);
            $this->categoryDB->add($category);
        }
    }
}