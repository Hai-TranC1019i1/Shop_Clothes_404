<a href="?page=add"><input type="button" value="add category"></a>


    <div class="row">
        <table class="table">
            <tr>
                <th scope="col">shirt</th>
                <th scope="col">trousers</th>
                <th scope="col">shoes</th>
                <th scope="col">accessories</th>
            </tr>

            <?php  foreach ($categorys as $key =>$category): ?>
            <tr>
                <th><?php echo ++$key?></th>
                <th><?php echo $category->getShirt()?></th>
                <th><?php echo $category->getTrousers()?></th>
                <th><?php echo $category->getShose()?></th>
                <th><?php echo $category->getAccessories()?></th>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>