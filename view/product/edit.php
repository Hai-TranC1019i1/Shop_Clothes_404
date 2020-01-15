<div class="container">
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="alert alert-<?php if ($isSuccess) echo "success"; else echo "danger"; ?>" role="alert">
            <?php echo $message;?>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-6">
            <h2>Add products: </h2>
            <form role="form" method="post" enctype="multipart/form-data">

                <input type="hidden" name="createdDate" value="<?php echo $product->getCreatedDate(); ?>">
                <div class="form-group">
                    <label for="productname" class="loginFormElement">Name Product:</label>
                    <input class="form-control" name="name" type="text" value="<?php echo $product->getName(); ?>">
                </div>

                <div class="form-group">
                    <label for="productprice" class="loginFormElement">Product Price</label>
                    <input class="form-control" name="price" type="text" value="<?php echo $product->getPrice(); ?>">
                </div>

                <select class="form-control" id="productSelect" name="type"><option>Please Select Type</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo $category->getName(); ?>"
                                <?php if ($category->getName() == $product->getType()) echo "selected";
                                ?>><?php echo $category->getName(); ?></option>
                    <?php endforeach;?>
                </select>

                <div class="form-group">

                    <label class="control-label">Product Image</label>
                    <img src="<?php $product->getImage(); ?>" alt="">
                    <input class="filestyle" data-icon="false" name="image" type="file">

                </div>

                <div class="form-group">
                    <label class="loginformelement" for="productdescription">Product Description</label>
                    <input name="description" class="form-control input-lg" type="text" value="<?php echo $product->getDescription(); ?>">

                    <button type="submit" class="btn btn-success loginFormElement">Add Product</button>

                </div>
            </form>

        </div>

    </div>
</div>
