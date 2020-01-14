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

                <div class="form-group">
                    <label for="productname" class="loginFormElement">Name Product:</label>
                    <input class="form-control" name="name" type="text" value="<?php echo $product->getName(); ?>">
                </div>

                <div class="form-group">
                    <label for="productprice" class="loginFormElement">Product Price</label>
                    <input class="form-control" name="price" type="text" value="<?php echo $product->getPrice(); ?>">
                </div>

                <select class="form-control" id="productSelect" name="type"><option>Please Select Type</option>
                    <option <?php if ($product->getType() == "Quần") echo "selected"; ?>>Quần</option>
                    <option <?php if ($product->getType() == "Áo") echo "selected"; ?>>Áo</option>
                    <option <?php if ($product->getType() == "Giày") echo "selected"; ?>>Giày</option>
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
