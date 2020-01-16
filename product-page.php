<!-- Page Add Section Begin -->
<section class="page-add">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="page-breadcrumb">
                    <h2><?php echo $product->getType(); ?><span>.</span></h2>
                    <a href="./index.php">Home</a>
                    <a href="#"><?php echo $product->getType(); ?></a>
                    <a class="active" href="#"><?php echo $product->getName(); ?></a>
                </div>
            </div>
            <div class="col-lg-8">
                <img src="img/add.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Page Add Section End -->

<!-- Product Page Section Beign -->
<section class="product-page">
    <div class="container">
        <div class="product-control">
            <a href="#">Previous</a>
            <a href="#">Next</a>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="product-slider owl-carousel">
                    <div class="product-img">
                        <figure>
                            <img src="<?php echo $product->getImage(); ?>" alt="">
                            <div class="p-status">new</div>
                        </figure>
                    </div>
                    <div class="product-img">
                        <figure>
                            <img src="<?php echo $product->getImage(); ?>" alt="">
                            <div class="p-status">new</div>
                        </figure>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="product-content">
                    <h2><?php echo $product->getName(); ?></h2>
                    <div class="pc-meta">
                        <h5><?php echo $product->getPrice(); ?></h5>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <p><?php echo $product->getDescription(); ?></p>
                    <ul class="tags">
                        <li><span>Category :</span> Men’s Wear</li>
                        <li><span>Tags :</span> man, shirt, dotted, elegant, cool</li>
                    </ul>
                    <div class="product-quantity">
                        <div class="pro-qty">
                            <input type="text" value="1">
                        </div>
                    </div>
                    <a href="#" class="primary-btn pc-btn">Add to cart</a>
                    <ul class="p-info">
                        <li>Product Information</li>
                        <li>Reviews</li>
                        <li>Product Care</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Page Section End -->
<div class="container" style="margin-top: 100px ">
<!--    <label for="input-1" class="control-label">Rate this product: </label>-->
<!--    <input id="input-1" name="input-1" class="rating rating-loading" value="1" data-min="0" data-max="5" data-step="0.5"-->
<!--           data-size="xs">-->
    <div class="fb-comments"
         data-href="https://developers.facebook.com/docs/plugins/comments#configurator"
         data-width="100%" data-numposts="5"></div>
</div>
<!-- Related Product Section Begin -->
<section class="related-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Related Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($relativeProducts as $product): ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="<?php echo $product->getImage(); ?>" alt=""></a>
                            <div class="p-status">new</div>
                        </figure>
                        <div class="product-text">
                            <h6><?php $product->getName(); ?></h6>
                            <p><?php echo $product->getPrice(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0"></script>
<!-- Related Product Section End -->