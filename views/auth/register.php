<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <form action="/register" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="example@cool.yolo">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="password_confirm" class="form-label">Confirm Password</label>
            <input name="password_confirm" type="password" class="form-control" id="password_confirm">
        </div>
        <button class="btn btn-primary">Register</button>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>