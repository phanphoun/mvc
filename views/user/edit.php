<?php
require_once __DIR__ . '/../partial/header.php';
include_once __DIR__ . '/../partial/navigation.php';
?>

<div class="container mt-5 mb-5">
    <h2 class="mb-4">Edit User</h2>
    <form action="/user/update" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name"
                value="<?php echo htmlspecialchars($data['name']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email"
                value="<?php echo htmlspecialchars($data['email']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update User</button>
        <a href="/about" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?php require_once __DIR__ . '/../partial/footer.php'; ?>