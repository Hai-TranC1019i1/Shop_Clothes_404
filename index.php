<?php
require "controller/ShopController.php";
require "controller/CategoryController.php";
require "model/cart/Cart.php";
require "model/category/Category.php";
require "model/category/CategoryDB.php";
require "model/DB.php";
require "model/product/Product.php";
require "model/product/ProductDB.php";
use Controller\CategoryController;

$controller = new CategoryController();
//$controller = new ShopController();
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

<div class="main-content">
        <?php
        $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : null;
        switch ($page) {
            case "add":
                $controller->add();
                break;
            case "delete":
                $controller->delete();
                break;
            case "edit":
                $controller->edit();
                break;
            default:
                $controller->index();
        }
        ?>

</div>

<!-- Footer Section Begin -->
<?php include "footer.php"?>
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