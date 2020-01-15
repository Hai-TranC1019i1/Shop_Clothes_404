
<a href="?page=add"><button type="button" class="btn btn-success">Add Content</button></a>

<div class="">
    <table>
        <tr>
            <th>ID</th>
            <th>User name</th>
            <th>Created date</th>
            <th>Content</th>
        </tr>
        <?php foreach ($comments as $key => $comment): ?>
            <tr>
                <td><?php echo ++$key?></td>
                <td><?php echo $comment->getUsername();?></td>
                <td><?php echo $comment->getCreatedDate();?></td>
                <td><?php echo $comment->getContent();?></td>
                <td><a href="./index.php?page=delete&id=<?php echo $comment->getId(); ?>"><button type="button" class="btn btn-danger">Delete</button>
            </tr>
        <?php endforeach; ?>
    </table>x
</div>
