<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <a href="/admin/posts/create" class="btn btn-primary">New Post</a>
    <table class="table table-striped table-hover">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach (($posts ?? []) as $post): ?>
                <tr>
                    <td><?= $post->id ?></td>
                    <td><?= $post->title ?></td>
                    <td><?= $post->author ?></td>
                    <td><?= $post->category ?></td>
                    <td><?= $post->created_at ?></td>
                    <td><?= $post->updated_at ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="/admin/posts/view?id=<?= $post->id ?>" class="btn btn-info">View</a>
                            <a href="/admin/posts/edit?id=<?= $post->id ?>" class="btn btn-warning">Edit</a>
                            <a href="/admin/posts/delete?id=<?= $post->id ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
        <tfoot>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tfoot>
    </table>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>