<?php include_once __DIR__ . '/../partial/header.php'; ?>
<?php include_once __DIR__ . '/../partial/navigation.php'; ?>

<div class="container mt-4">
    <h2>Delete Product</h2>

    <div class="alert alert-warning">
        <h4>Are you sure you want to delete this product?</h4>
        <p><strong>This action cannot be undone!</strong></p>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($data['name']); ?></h5>
            <p class="card-text">
                <strong>Description:</strong> <?php echo htmlspecialchars($data['description']); ?><br>
                <strong>Price:</strong> $<?php echo $data['price']; ?><br>
                <strong>Stock:</strong> <?php echo $data['stock']; ?>
            </p>
        </div>
    </div>

    <form method="POST" action="/product/destroy">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <button type="submit" class="btn btn-danger">Delete Product</button>
        <a href="/getProducts" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?php include_once __DIR__ . '/../partial/footer.php'; ?>