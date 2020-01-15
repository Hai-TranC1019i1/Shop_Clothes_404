<div class="container" style="clear: both; text-align: center">

    <div class="section-title">
        <h2>List Category</h2><br>
        <a href="./admin.php?page=category&action=add">
            <input type="button" value="Add Category" class="btn btn-success"></a><br>
    </div>

    <div class="" style="margin-top: 10px">
        <table class="table">
            <tr>

                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
               
            </tr>

            <?php  foreach ($categories as $key =>$category): ?>
            <tr>
                <th><?php echo ++$key?></th>
                <th><?php echo $category->getName()?></th>
                <th><?php echo $category->getDescription()?></th>

                <th>
                    <a href="./admin.php?page=category&action=delete"><input type="button" class="btn btn-danger" value="Delete"></a>
                    <a href="./admin.php?page=category&action=edit"><input type="button" class="btn btn-success" value="Edit"></a>
                </th>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>