<?php

require "../model/blog/Post.php";
require "../model/blog/PostDB.php";
require "../model/DB.php";
$id = $_GET['id'];
$postDB = new PostDB();
$postDB->delete($id);
header("location:index.php");
