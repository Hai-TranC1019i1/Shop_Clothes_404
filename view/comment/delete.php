
<h3><?php echo $comment->getUsername(); ?></h3>
<form action="./index.php?page=delete" method="post">
    <input type="hidden" name="id" value="<?php echo $comment->getId(); ?>"/>
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="index.php">Cancel</a>
    </div>
</form>
<h2>Comment</h2>
<a href="./index.php?page=add">Add New Content</a>
<table class="table">
    <thead>
    <tr>
        <th>User name</th>
        <th>Created date</th>
        <th>Content</th>

        <th></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $comment->getUsername() ?></td>
        <td><?php echo $comment->getCreatedDate() ?></td>
        <td><?php echo $comment->getContent() ?></td>
    </tr>
    </tbody>
</table>
