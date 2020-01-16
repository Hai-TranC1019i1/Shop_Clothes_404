<?php

include_once "include_src.php";

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Shop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

<?php include "header.php"; ?>
<input type="hidden" name="createdD">
<div class="main-content">
    <?php
    $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : null;
    $action = isset($_REQUEST["action"]) ? $_REQUEST["action"] : null;

    switch ($page) {
        case "category":
            $controller = new CategoryController();
            break;
        case 'order':
            $controller = new OrderController();
            break;
        case "comment":
            $controller = new CommentController();
            break;
        case "blog":
            $controller = new BlogController();
            break;
        case "about-me":
            include_once "about_me.php";
            break;
        case "contact":
            include_once "contact.php";
            break;
        case "categories":
            include_once "base-categories.php";
            break;
        default:
            $controller = new ShopController();
    }

    switch ($action) {
        case "add":
            $controller->add();
            break;
        case "delete":
            $controller->delete();
            break;
        case "edit":
            $controller->edit();
            break;
        case "admin-index":
            $controller->index();
            break;
        case "detail":
            $controller->detail();
            break;
        case "get-list":
            $controller->getList();
            break;
        default:
            if ($page == null) {
                $controller->listNewestProduct();
            }
    }
    ?>

</div>

<!-- Footer Section Begin -->
<?php include "footer.php" ?>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>