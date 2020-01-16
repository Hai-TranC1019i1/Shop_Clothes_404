<section class="page-add">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="page-breadcrumb">
                    <h2>Dresses<span>.</span></h2>
                    <a href="#">Home</a>
                    <a href="#">Dresses</a>
                    <a class="active" href="#">Night Dresses</a>
                </div>
            </div>
            <div class="col-lg-8">
                <img src="img/add.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Categories Page Section Begin -->
<section class="categories-page spad">
    <div class="container">
        <div class="categories-controls">
            <div class="row">
                <div class="col-lg-12">
                    <div class="categories-filter">
                        <div class="cf-left">
                            <form action="#">
                                <select class="sort">
                                    <option value="">Sort by</option>
                                    <option value="">Orders</option>
                                    <option value="">Newest</option>
                                    <option value="">Price</option>
                                </select>
                            </form>
                        </div>
                        <div class="cf-right">
                            <span>20 Products</span>
                            <a href="#">1</a>
                            <a href="#" class="active">2</a>
                            <a href="#">3</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($products as $key => $product): ?>
            <div class="col-lg-3 col-md-6">
                <div class="single-product-item">
                    <figure>
                        <img src="<?php echo $product->getImage(); ?>" alt="">
                        <div class="p-status">new</div>
                        <div class="hover-icon">
                            <a href="<?php echo $product->getImage(); ?>" class="pop-up"><img src="img/icons/zoom-plus.png"
                                                                                 alt=""></a>
                        </div>
                    </figure>
                    <div class="product-text">
                        <a href="./index.php?page=product&action=detail&id=<?php echo $product->getId(); ?>">
                            <h6><?php echo $product->getName(); ?></h6>
                        </a>
                        <p><?php echo $product->getPrice(); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="more-product">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="#" class="primary-btn">Load More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Page Section End -->