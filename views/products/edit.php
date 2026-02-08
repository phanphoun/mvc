<?php
require_once __DIR__ . '/../partial/header.php';
include_once __DIR__ . '/../partial/navigation.php';
?>

<div class="container mt-5 mb-5">
    <h2 class="mb-4">Edit Product</h2>
    <form action="/product/update" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="name"
                value="<?php echo htmlspecialchars($data['name']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"
                required><?php echo htmlspecialchars($data['description']); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price"
                value="<?php echo $data['price']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="<?php echo $data['stock']; ?>"
                required>
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
        <a href="/" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?php require_once __DIR__ . '/../partial/footer.php'; ?>