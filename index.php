<?php
require "controller/CategoryController.php";
require "model/cart/Cart.php";
require "model/category/Category.php";
require "model/category/CategoryDB.php";
require "model/DB.php";
use Controller\CategoryController;

$controller = new CategoryController();

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
                <a href="./index.html"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="header-right">
                <img src="img/icons/search.png" alt="" class="search-trigger">
                <img src="img/icons/man.png" alt="">
                <a href="#">
                    <img src="img/icons/bag.png" alt="">
                    <span>2</span>
                </a>
            </div>
            <div class="user-access">
                <a href="login/register.html">Register</a>
                <a href="login/login.html" class="in">Sign in</a>
            </div>
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a class="active" href="./index.html">Trang Chủ</a></li>
                    <li><a href="./categories.html">Cửa Hàng</a>
                        <ul class="sub-menu">
                            <li><a href="product-page.html">Trang Sản Phẩm</a></li>
                            <li><a href="shopping-cart.html">Thẻ Mua Sắm</a></li>
                            <li><a href="check-out.html">Thủ Tục Thanh Toán</a></li>
                        </ul>
                    </li>
                    <li><a href="./product-page.html">About</a></li>
                    <li><a href="./check-out.html">Blog</a></li>
                    <li><a href="./contact.html">Liên Hệ</a></li>
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
                    <p>Miễn phí ship với đơn hàng trên 5000$ tại Việt Nam</p>
                </div>
            </div>
            <div class="col-md-4 text-left text-lg-center">
                <div class="header-item">
                    <img src="img/icons/voucher.png" alt="">
                    <p>Sinh Viên  được giảm giá tới 20%</p>
                </div>
            </div>
            <div class="col-md-4 text-left text-xl-right">
                <div class="header-item">
                    <img src="img/icons/sales.png" alt="">
                    <p>Giảm giá tới 30% nếu bạn nhập mã code: QuocDanDepTrai</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Info End -->
<!-- Header End -->

<!-- Hero Slider Begin -->
<section class="hero-slider">
    <div class="hero-items owl-carousel">
        <div class="single-slider-item set-bg" data-setbg="img/slider-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>2020</h1>
                        <h2>Phong Cách Thời Trang Mới Nhất.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider-item set-bg" data-setbg="img/slider-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>2020</h1>
                        <h2>Phong Cách Thời Trang Mới Nhất.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider-item set-bg" data-setbg="img/slider-3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>2020</h1>
                        <h2>Phong Cách Thời Trang Mới Nhất.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Slider End -->

<!-- Features Section Begin -->
<section class="features-section spad">
    <div class="features-ads">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-features-ads first">
                        <img src="img/icons/f-delivery.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Chúng tôi cung cấp dịch vụ giao hàng hoàn toàn miễn phí. </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-features-ads second">
                        <img src="img/icons/coin.png" alt="">
                        <h4>100% Money back </h4>
                        <p>Nếu không hài lòng sản phẩm , chúng tôi cam kết hoàn tiền 100%. </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-features-ads">
                        <img src="img/icons/chat.png" alt="">
                        <h4>Online support 24/7</h4>
                        <p>Với đội ngũ nhân viên tư vấn nhiệt tình hỗ trợ 24/7. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Box -->
    <div class="features-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-box-item first-box">
                                <img src="img/f-box-1.jpg" alt="">
                                <div class="box-text">
                                    <span class="trend-year">2019 Party</span>
                                    <h2>Jewelry</h2>
                                    <span class="trend-alert">Trend Allert</span>
                                    <a href="#" class="primary-btn">See More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-box-item second-box">
                                <img src="img/f-box-2.jpg" alt="">
                                <div class="box-text">
                                    <span class="trend-year">2019 Trend</span>
                                    <h2>Footwear</h2>
                                    <span class="trend-alert">Bold & Black</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-box-item large-box">
                        <img src="img/f-box-3.jpg" alt="">
                        <div class="box-text">
                            <span class="trend-year">2019 Party</span>
                            <h2>Collection</h2>
                            <div class="trend-alert">Trend Allert</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Section End -->

<!-- Latest Product Begin -->
<section class="latest-products spad">
    <div class="container">
        <div class="product-filter">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>DANH MỤC</h2>
                    </div>
                    <ul class="product-controls">
                        <li data-filter="*">All</li>
                        <li data-filter=".dresses">ÁO</li>
                        <li data-filter=".bags">QUẦN</li>
                        <li data-filter=".shoes">GIÀY</li>
                        <li data-filter=".accesories">PHỤ KIỆN</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" id="product-list">
            <div class="col-lg-3 col-sm-6 mix all dresses bags">
                <div class="single-product-item">
                    <figure>
                        <a href="#"><img src="img/products/img-1.jpg" alt=""></a>
                        <div class="p-status">new</div>
                    </figure>
                    <div class="product-text">
                        <h6>Green Dress with details</h6>
                        <p>$22.90</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mix all dresses bags">
                <div class="single-product-item">
                    <figure>
                        <a href="#"><img src="img/products/img-2.jpg" alt=""></a>
                        <div class="p-status sale">sale</div>
                    </figure>
                    <div class="product-text">
                        <h6>Yellow Maxi Dress</h6>
                        <p>$25.90</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mix all shoes accesories">
                <div class="single-product-item">
                    <figure>
                        <a href="#"><img src="img/products/img-3.jpg" alt=""></a>
                        <div class="p-status">new</div>
                    </figure>
                    <div class="product-text">
                        <h6>One piece bodysuit</h6>
                        <p>$19.90</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mix all shoes accesories">
                <div class="single-product-item">
                    <figure>
                        <a href="#"><img src="img/products/img-4.jpg" alt=""></a>
                        <div class="p-status popular">popular</div>
                    </figure>
                    <div class="product-text">
                        <h6>Blue Dress with details</h6>
                        <p>$35.50</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mix all dresses shoes">
                <div class="single-product-item">
                    <figure>
                        <a href="#"><img src="img/products/img-5.jpg" alt=""></a>
                        <div class="p-status">new</div>
                    </figure>
                    <div class="product-text">
                        <h6>Green Dress with details</h6>
                        <p>$22.90</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mix all accesories bags">
                <div class="single-product-item">
                    <figure>
                        <a href="#"><img src="img/products/img-6.jpg" alt=""></a>
                        <div class="p-status sale">sale</div>
                    </figure>
                    <div class="product-text">
                        <h6>Yellow Maxi Dress</h6>
                        <p>$25.90</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mix all dresses bags">
                <div class="single-product-item">
                    <figure>
                        <a href="#"><img src="img/products/img-7.jpg" alt=""></a>
                    </figure>
                    <div class="product-text">
                        <h6>One piece bodysuit</h6>
                        <p>$19.90</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mix all accesories bags">
                <div class="single-product-item">
                    <figure>
                        <a href="#"><img src="img/products/img-8.jpg" alt=""></a>
                        <div class="p-status popular">popular</div>
                    </figure>
                    <div class="product-text">
                        <h6>Blue Dress with details</h6>
                        <p>$35.50</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Product End -->

<!-- Lookbok Section Begin -->
<section class="lookbok-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 offset-lg-1">
                <div class="lookbok-left">
                    <div class="section-title">
                        <h2>2019 <br />#lookbook</h2>
                    </div>
                    <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vestibulum malesuada
                        aliquet libero viverra cursus. Aliquam erat volutpat. Morbi id dictum quam, ut commodo
                        lorem. In at nisi nec arcu porttitor aliquet vitae at dui. Sed sollicitudin nulla non leo
                        viverra scelerisque. Phasellus facilisis lobortis metus, sit amet viverra lectus finibus ac.
                        Aenean non felis dapibus, placerat libero auctor, ornare ante. Morbi quis ex eleifend,
                        sodales nulla vitae, scelerisque ante. Nunc id vulputate dui. Suspendisse consectetur rutrum
                        metus nec scelerisque. s</p>
                    <a href="#" class="primary-btn look-btn">See More</a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="lookbok-pic">
                    <img src="img/lookbok.jpg" alt="">
                    <div class="pic-text">fashion</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Lookbok Section End -->

<!-- Logo Section Begin -->
<div class="logo-section spad">
    <div class="logo-items owl-carousel">
        <div class="logo-item">
            <img src="img/logos/logo-1.png" alt="">
        </div>
        <div class="logo-item">
            <img src="img/logos/logo-2.png" alt="">
        </div>
        <div class="logo-item">
            <img src="img/logos/logo-3.png" alt="">
        </div>
        <div class="logo-item">
            <img src="img/logos/logo-4.png" alt="">
        </div>
        <div class="logo-item">
            <img src="img/logos/logo-5.png" alt="">
        </div>
    </div>
</div>
<!-- Logo Section End -->

<!-- Footer Section Begin -->
<footer class="footer-section spad">
    <div class="container">
        <div class="newslatter-form">
            <div class="row">
                <div class="col-lg-12">
                    <form action="#">
                        <input type="text" placeholder="Nhập vào thông tin">
                        <button type="submit">Nhận Thông Báo Từ Chúng Tôi</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-widget">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Về chúng tôi</h4>
                        <ul>
                            <li>Chúng tôi</li>
                            <li>Cộng đồng</li>
                            <li>Công việc</li>
                            <li>Chuyển hàng</li>
                            <li>Liên hệ chúng tôi</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Chăm sóc khách hàng</h4>
                        <ul>
                            <li>Tìm kiếm</li>
                            <li>Chính sách bảo mật</li>
                            <li>Cẩm nang năm 2020</li>
                            <li>Vận chuyển và giao hàng</li>
                            <li>Bộ sưu tập</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Dịch vụ của chúng tôi</h4>
                        <ul>
                            <li>Miễn phí vận chuyển</li>
                            <li>Hoàn trả miễn phí</li>
                            <li>Nhượng quyền của chúng tôi</li>
                            <li>Các điều khoản và điều kiện</li>
                            <li>Chính sách bảo mật</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Thông tin</h4>
                        <ul>
                            <li>Phương thức thanh toán</li>
                            <li>Thời gian và chi phí vận chuyển</li>
                            <li>Trả lại sản phẩm</li>
                            <li>Phương thức vận chuyển</li>
                            <li>Sự phù hợp của sản phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-links-warp" style="text-align: center">
        <div class="container">
            <div class="social-links">
                <a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                <a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                <a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
                <a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
            </div>
        </div>

        <div class="container text-center pt-5">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This is code <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Team 404</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>


    </div>
</footer>
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