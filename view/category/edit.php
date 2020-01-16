<form method="post">
    <div class="form-group">
        <label for="">Name </label>
        <input type="text" name="name" class="form-control" value="<?php echo $category->getName(); ?>">
    </div>
    <input type="hidden" name="id" value="<?php echo $category->getId(); ?>">
    <div class="form-group">
        <label for="">description </label>
        <input type="text" name="description" class="form-control" value="<?php echo $category->getDescription(); ?>">
    </div>
    <input type="submit" value="Edit">
</form>