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
                    <input class="form-control" name="name" type="text">
                </div>

                <div class="form-group">
                    <label for="productprice" class="loginFormElement">Product Price</label>
                    <input class="form-control" name="price" type="text">
                </div>

                <select class="form-control" id="productSelect" name="type"><option>Please Select Type</option>
                    <option>Quần</option>
                    <option>Áo</option>
                    <option>Giày</option>
                </select>

                <div class="form-group">

                    <label class="control-label">Product Image</label>

                    <input class="filestyle" data-icon="false" name="image" type="file">

                </div>

                <div class="form-group">
                    <label class="loginformelement" for="productdescription">Product Description</label>
                    <input name="description" class="form-control input-lg" type="text">

                    <button type="submit" class="btn btn-success loginFormElement">Add Product</button>

                </div>
            </form>

        </div>

    </div>
</div>