<a href="?page=add"><input type="button" value="add category"></a>


    <div class="">
        <table class="table">
            <tr>
                <th scope="col">name</th>
                <th scope="col">description</th>
               
            </tr>

            <?php  foreach ($categories as $key =>$category): ?>
            <tr>
                <th><?php echo ++$key?></th>
                <th><?php echo $category->getName()?></th>
                <th><?php echo $category->getDescription()?></th>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>