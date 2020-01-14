<!--<div class="row">-->
<!--    <form method="post">-->
<!--            <label>User name: </label>-->
<!--            <input type="text" name="username">-->
<!--            <label>Created date : </label>-->
<!--            <input type="datetime-local" name="createdDate">-->
<!--            <label>content:</label>-->
<!--            <textarea name="content" class="form-control" rows="3" placeholder="nội dung"></textarea>-->
<!--        <input type="submit" value="add">-->
<!--    </form>-->
<!--</div>-->

<div class="container">

    <div class="row">
        <div class="col-md-6">
            <h2>Rate: </h2>
            <form role="form" method="post">
                <div class="form-group">
                    <label for="productname" class="loginFormElement"></label>
                    <input class="form-control" name="username" type="text" placeholder="User Name">
                </div>
                <div class="form-group">
                    <label for="productprice" class="loginFormElement"></label>
                    <textarea name="content" class="form-control" rows="3" placeholder="Content"></textarea>
                </div>`
                <div class="form-group">
                    <label for="productprice" class="loginFormElement"></label>
                    <input class="form-control" name="createdDate" type="hidden" value="<?php echo date("Y-m-d H:i:s");?>">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>