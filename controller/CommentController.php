<?php


class CommentController
{
    private $commentDB;

    public function __construct()
    {
        $this->commentDB = new CommentDB();
    }

    public function index()
    {
        $comment = $this->commentDB->getAll();
        include_once "view/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET"){
            include_once "view/add.php";
        }elseif($_SERVER['REQUEST_METHOD'] =="POST"){
            $comment = new Comment($_POST['username'],$_POST['createdDate'],$_POST['content']);
            $this->commentDB->add($comment);
        }
    }

    public function delete()
    {
       if ($_SERVER['REQUEST_METHOD'] == "GET"){
           $id = $_GET['id'];
           $comment = $this->commentDB->getId($id);
           include "view/delete.php";
       }else{
           $id = $_POST['id'];
           $this->commentDB->delete($id);
       }
    }
}