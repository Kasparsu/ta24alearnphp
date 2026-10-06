<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <form action="/admin/posts" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Post title">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea name="body" class="form-control" id="body" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input name="category" type="text" class="form-control" id="category" placeholder="Post category">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input name="author" type="text" class="form-control" id="author" placeholder="Post author">
        </div>
        <button class="btn btn-primary">Create</button>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>