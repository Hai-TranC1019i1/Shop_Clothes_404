<div class="container" style="margin-top: 30px">
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form role="form" method="post">
                <div class="container">
                    <div class="post-comments">
                        <div class="form-group">
                            <label for="comment">Your Comment</label>
                            <textarea name="conten" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                        <div class="form-group">
                            <label for="productprice" class="loginFormElement"></label>
                            <input class="form-control" name="createdDate" type="hidden"
                                   value="<?php echo date("Y-m-d H:i:s"); ?>">
                        </div>
                    </div>
                    <div class="comments-list">
                        <div class="media">
                            <p class="pull-right"><small>5 days ago</small></p>
                            <a class="media-left" href="#">
                                <img src="img/product/product-1.jpg" style="width: 20%">
                            </a>
                            <div class="media-body">

                                <h4 class="media-heading user_name">Baltej Singh</h4>
                                Wow! this is really great.

                                <p><small><a href="">Like</a><a href="">Share</a></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">

        </div>
    </div>
</div>

<!------ Include the above in your HEAD tag ---------->

