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
        $comments = $this->commentDB->getAll();
        include_once "view/comment/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET"){
            include "view/comment/add.php";
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
           include "view/comment/delete.php";

       }else{
           $id = $_POST['id'];
           $this->commentDB->delete($id);
       }
    }
}