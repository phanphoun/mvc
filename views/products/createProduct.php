<?php include_once __DIR__ . '/../partial/header.php'; ?>
<?php include_once __DIR__ . '/../partial/navigation.php'; ?>

<div class="container mt-4">
    <h2>Add New Product</h2>

    <form method="POST" action="/product/store" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" min="0" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" min="0" required>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Create Product</button>
            <a href="/getProducts" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

<?php include_once __DIR__ . '/../partial/footer.php'; ?>