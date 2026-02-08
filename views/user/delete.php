<?php
require_once __DIR__ . '/../partial/header.php';
include_once __DIR__ . '/../partial/navigation.php';
?>

<div class="container mt-5 mb-5">
    <div class="card border-danger">
        <div class="card-header bg-danger text-white">
            <h2 class="mb-0">Delete User</h2>
        </div>
        <div class="card-body p-4">
            <p class="lead">Are you sure you want to delete this user?</p>
            <div class="alert alert-warning">
                <strong>Warning:</strong> This action cannot be undone!
            </div>

            <table class="table table-bordered">
                <tr class="table-primary">
                    <th>ID:</th>
                    <td>
                        <?php echo $data['id']; ?>
                    </td>
                </tr>
                <tr class="table-primary">
                    <th>Name:</th>
                    <td>
                        <?php echo htmlspecialchars($data['name']); ?>
                    </td>
                </tr>
                <tr class="table-primary">
                    <th>Email:</th>
                    <td>
                        <?php echo htmlspecialchars($data['email']); ?>
                    </td>
                </tr>
                <tr class="table-primary">
                    <th>Created At:</th>
                    <td>
                        <?php echo $data['created_at']; ?>
                    </td>
                </tr>
            </table>

            <form action="/user/destroy" method="POST" class="d-inline">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <button type="submit" class="btn btn-danger">Yes, Delete User</button>
            </form>
            <a href="/about" class="btn btn-secondary">Cancel</a>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../partial/footer.php'; ?>