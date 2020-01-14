
<a href="?page=add"><input type="button" value="add comment"></a>

<div class="row">
    <table>
        <tr>
            <th>User name</th>
            <th>Created date</th>
            <th>Content</th>
        </tr>
        <?php foreach ($comments as $key => $comment): ?>
            <tr>
                <td><?php echo ++$key?></td>
                <td><?php echo $comment->getUsername()?></td>
                <td><?php echo $comment->getCreatedDate() ?></td>
                <td><?php echo $comment->getContent() ?></td>
                        <input type="button" value="button"></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>