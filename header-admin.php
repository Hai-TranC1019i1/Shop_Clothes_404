<!-- Page Preloder -->
<div class="header-admin">
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Search model -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./admin.php"><img src="img/logo.png" alt=""></a>
                </div>
<!--                <div class="header-right">-->
<!--                    <img src="img/icons/search.png" alt="" class="search-trigger">-->
<!--                    <img src="img/icons/man.png" alt="">-->
<!--                    <a href="#">-->
<!--                        <img src="img/icons/bag.png" alt="">-->
<!--                        <span>2</span>-->
<!--                    </a>-->
<!--                </div>-->
                <div class="user-access">
                    <span>Hi, Admin | </span>
                    <a href="./login/login.html">Log out</a>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a
                                <?php if ($_GET["page"] == "")
                                    echo "class='active'"?> href="./admin.php">Trang Chủ</a></li>
                        <li><a <?php if ($_GET["page"] == "product")
                            echo "class='active'"?>href="./admin.php?page=product">Product</a></li>
                        <li><a <?php if ($_GET["page"] == "category")
                            echo "class='active'"?>href="./admin.php?page=category">Category</a></li>
                        <li><a <?php if ($_GET["page"] == "blog")
                            echo "class='active'"?>href="./admin.php?page=blog">Blog</a></li>
                        <li><a <?php if ($_GET["page"] == "rating")
                            echo "class='active'"?>href="./admin.php?page=rating">Rating</a></li>
                        <li><a <?php if ($_GET["page"] == "order")
                            echo "class='active'"?>href="./admin.php?page=order">Order</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</div>