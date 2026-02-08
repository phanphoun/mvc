<?php
require_once __DIR__ . '/../partial/header.php';
include_once __DIR__ . '/../partial/navigation.php';
?>

<div class="container mt-5 mb-5">
    <div class="card border-danger">
        <div class="card-header bg-danger text-white">
            <h2 class="mb-0">Delete Product</h2>
        </div>
        <div class="card-body">
            <p class="lead">Are you sure you want to delete this product?</p>
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
                    <th>Description:</th>
                    <td>
                        <?php echo htmlspecialchars($data['description']); ?>
                    </td>
                </tr>
                <tr class="table-primary">
                    <th>Price:</th>
                    <td>$
                        <?php echo $data['price']; ?>
                    </td>
                </tr>
                <tr class="table-primary">
                    <th>Stock:</th>
                    <td>
                        <?php echo $data['stock']; ?>
                    </td>
                </tr>
            </table>

            <form action="/product/destroy" method="POST" class="d-inline">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <button type="submit" class="btn btn-danger">Yes, Delete Product</button>
            </form>
            <a href="/" class="btn btn-secondary">Cancel</a>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../partial/footer.php'; ?>