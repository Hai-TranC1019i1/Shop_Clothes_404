<h3>Are you sure you want to delete?</h3>
<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $category->getId(); ?>">
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="index.php">Delete</a>
    </div>
</form>
<div class="row" id="category">
    <div class="col-lg-3 col-sm-6 mix all dresses bags">
        <div class="single-product-item">
            <div class="category-text">
                <p><?php echo $category->getName(); ?></p>
                <p><?php echo $category->getDescription(); ?></p>
            </div>
        </div>
    </div>
</div>