<!-- Page Preloder -->
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
                <a href="./index.php"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="header-right">
                <img src="img/icons/search.png" alt="" class="search-trigger">
            </div>
            <div class="user-access">
                <a href="login/register.html">Register / </a>
                <a href="login/login.html"><!--class="in"-->Sign in</a>
            </div>
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a href="./index.php"
                            <?php if ($_GET["page"] == "" && $_GET["action"] == "")
                            echo "class='active'"?>>Trang Chủ</a></li>
                    <li><a href="#"
                            <?php if ($_GET["page"] == "fg")
                            echo "class='active'"?>>Cửa Hàng</a>
                        <ul class="sub-menu">
                            <li><a href="index.php?page=product&action=get-list"
                                    <?php if ($_GET["page"] == "d")
                                    echo "class='active'"?>>Trang Sản Phẩm</a></li>
                            <li><a href="shopping-cart.html"
                                    <?php if ($_GET["page"] == "s")
                                    echo "class='active'"?>>Thẻ Mua Sắm</a></li>
                            <li><a href=""
                                    <?php if ($_GET["page"] == "b")
                                    echo "class='active'"?>>Thủ Tục Thanh Toán</a></li>
                        </ul>
                    </li>
                    <li><a href="./index.php?page=about-me"
                            <?php if ($_GET["page"] == "about-me")
                            echo "class='active'"?>>About</a></li>
                    <li><a href="./check-out.html"
                            <?php if ($_GET["page"] == "z")
                            echo "class='active'"?>>Blog</a></li>
                    <li><a href="./index.php?page=contact"
                            <?php if ($_GET["page"] == "contact")
                            echo "class='active'"?>>Liên Hệ</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header Info Begin -->
<div class="header-info">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="header-item">
                    <img src="img/icons/delivery.png" alt="">
                    <p>Free shipping on orders over $30 in VietNam</p>
                </div>
            </div>
            <div class="col-md-4 text-left text-lg-center">
                <div class="header-item">
                    <img src="img/icons/voucher.png" alt="">
                    <p>20% Student Discount</p>
                </div>
            </div>
            <div class="col-md-4 text-left text-xl-right">
                <div class="header-item">
                    <img src="img/icons/sales.png" alt="">
                    <p>10% off on dresses. Use code: 404OFF</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Info End -->