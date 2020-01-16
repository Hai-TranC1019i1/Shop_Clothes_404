
    <div class="row">
        <div class="col-md-6">
            <h2>Add orders: </h2>
            <form role="form" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="productname" class="loginFormElement">Order Date:</label>
                    <input class="form-control" name="orderDate" type="text">
                </div>
                <div class="form-group">
                    <label for="productprice" class="loginFormElement">Status</label>
                    <select name="status" id="">
                        <option value="watting">Watting</option>
                        <option value="paid">Paid</option>
                        <option value="shiping">Shiping</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="productname" class="loginFormElement">Comment:</label>
                    <input class="form-control" name="comments" type="text">
                </div>
                <div class="form-group">
                    <label for="productname" class="loginFormElement">Comment:</label>
                    <input class="form-control" name="customerNumber" type="number">
                </div>
                <select class="form-control" id="productSelect" name="type"><option>Please Select Type</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo $category->getName(); ?>"><?php echo $category->getName(); ?></option>
                    <?php endforeach;?>
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
