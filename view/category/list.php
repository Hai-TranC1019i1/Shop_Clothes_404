<a href="?page=add"><input type="button" value="add category"></a>


    <div class="">
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
                <a href="./index.php?page=edit&id=<?php echo $category->getId();?>">Edit |</a>
                <th><a href="./index.php?page=delete&id=<?php echo $category->getId(); ?>"><button type="button" class="btn btn-danger">Delete</button></a></th>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>