<?php
require_once __DIR__ . '/../partial/header.php';
include_once __DIR__ . '/../partial/navigation.php';
?>

<div class="container mt-5 mb-5">
    <h2 class="mb-4">Create New User</h2>
    <form action="/user/store" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-success">Create User</button>
        <a href="/about" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?php require_once __DIR__ . '/../partial/footer.php'; ?>