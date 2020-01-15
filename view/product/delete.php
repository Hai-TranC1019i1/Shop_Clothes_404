<div class="container">
    <h3>Do you want to delete this?</h3>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $product->getId(); ?>">
        <div class="form-group">
            <input type="submit" value="Delete" class="btn btn-danger"/>
            <a class="btn btn-success" href="admin.php">Cancel</a>
        </div>
    </form>

    <div class="row" id="product-list">
        <div class="col-lg-3 col-sm-6 mix all dresses bags">
            <div class="single-product-item">
                <figure>
                    <a href="#"><img src="<?php echo $product->getImage(); ?>" alt=""></a>
                    <div class="p-status">new</div>
                </figure>
                <div class="product-text">
                    <h6><?php echo $product->getName(); ?></h6>
                    <p><?php echo $product->getPrice(); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>