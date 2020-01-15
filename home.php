
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>List Product</h2>
                        </div>
                        <div>
                            <a href="./admin.php?page=product&action=add"><input type="button" class="btn btn-success" value="Add product"></a>
                        </div><br>
                        <ul class="product-controls">
                            <li data-filter="*">All</li>
                            <li data-filter=".dresses">Dresses</li>
                            <li data-filter=".bags">Bags</li>
                            <li data-filter=".shoes">Shoes</li>
                            <li data-filter=".accesories">Accesories</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row" id="product-list">
                <?php foreach ($products as $product): ?>
                <div class="col-lg-3 col-sm-6 mix all dresses bags">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="<?php echo $product->getImage();?>" alt=""></a>
                            <div class="p-status">new</div>
                        </figure>
                        <div class="product-text">
                            <h6><?php echo $product->getName(); ?></h6>
                            <p><?php echo $product->getPrice(); ?></p>
                        </div>
                        <div>
                            <a href="./admin.php?page=product&action=delete&id=<?php echo $product->getId(); ?>">
                            <input type="button" class="btn btn-danger" value="Delete"></a>
                            <a href="./admin.php?page=product&action=edit&id=<?php echo $product->getId(); ?>"><input type="button" class="btn btn-success" value="Edit"></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

