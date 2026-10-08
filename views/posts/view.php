<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <table class="table table-hover table-striped">
        <tbody>
            <tr>
                <th>ID</th>
                <td><?= $post->id ?></td>
            </tr>
            <tr>
                <th>Title</th>
                <td><?= $post->title ?></td>
            </tr>
            <tr>
                <th>Content</th>
                <td><?= $post->body ?></td>
            </tr>
            <tr>
                <th>Category</th>
                <td><?= $post->category ?></td>
            </tr>
            <tr>
                <th>Author</th>
                <td><?= $post->author ?></td>
            </tr>
            <tr>
                <th>Created</th>
                <td><?= $post->created_at ?></td>
            </tr>
            <tr>
                <th>Updated</th>
                <td><?= $post->updated_at ?></td>
            </tr>
        </tbody>
    </table>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>