<?php
require "../model/blog/Post.php";
require "../model/blog/PostDB.php";
require "../model/DB.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $created = $_POST['created'];
    $post = new Post($title, $content,$created);
    $postDB = new PostDB();
    $postDB->add($post);
    header("location: index.php");
}



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <!-- Default form contact -->
    <form class="text-center border border-light p-5" method="post">

        <p class="h4 mb-4"><b> Blog</b></p>

        <!-- Name -->
        <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="title" name="title"><br>

        <!-- Email -->
        <textarea rows="4" cols="50" name="content"></textarea>
        <input type="hidden" name="created" value="<?php
        date_default_timezone_set("Asia/Ho_Chi_Minh"); echo date("Y-m-d"); ?>">
        <button class="btn btn-info btn-block" type="submit">Send</button>

    </form>
    <!-- Default form contact -->
</div>
</body>
</html>