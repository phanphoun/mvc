
<?php include_once __DIR__ . '/partial/header.php';?>
<?php include_once __DIR__ . '/partial/navigation.php';?>

<h1>Welcome to Home Page!</h1>

<div class="row">
    <div class="col-md-6">
        <h2>Users</h2>
        <?php if ($data['users'] && count($data['users']) > 0): ?>
            <table border="1" style="border-collapse: collapse; width: 100%; margin-top: 20px;">
                <thead>
                    <tr>
                        <th style="padding: 8px; background-color: #f2f2f2;">ID</th>
                        <th style="padding: 8px; background-color: #f2f2f2;">Name</th>
                        <th style="padding: 8px; background-color: #f2f2f2;">Email</th>
                        <th style="padding: 8px; background-color: #f2f2f2;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['users'] as $user): ?>
                        <tr>
                            <td style="padding: 8px; border: 1px solid #ddd;"><?php echo $user['id']; ?></td>
                            <td style="padding: 8px; border: 1px solid #ddd;"><?php echo htmlspecialchars($user['name']); ?></td>
                            <td style="padding: 8px; border: 1px solid #ddd;"><?php echo htmlspecialchars($user['email']); ?></td>
                            <td style="padding: 8px; border: 1px solid #ddd;">
                                <a href="/user/edit?id=<?php echo $user['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="/user/delete?id=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No users found in the database.</p>
        <?php endif; ?>
    </div>
    
    <div class="col-md-6">
        <h2>Products</h2>
        <?php if ($data['products'] && count($data['products']) > 0): ?>
            <table border="1" style="border-collapse: collapse; width: 100%; margin-top: 20px;">
                <thead>
                    <tr>
                        <th style="padding: 8px; background-color: #f2f2f2;">ID</th>
                        <th style="padding: 8px; background-color: #f2f2f2;">Name</th>
                        <th style="padding: 8px; background-color: #f2f2f2;">Description</th>
                        <th style="padding: 8px; background-color: #f2f2f2;">Price</th>
                        <th style="padding: 8px; background-color: #f2f2f2;">Stock</th>
                        <th style="padding: 8px; background-color: #f2f2f2;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['products'] as $product): ?>
                        <tr>
                            <td style="padding: 8px; border: 1px solid #ddd;"><?php echo $product['id']; ?></td>
                            <td style="padding: 8px; border: 1px solid #ddd;"><?php echo htmlspecialchars($product['name']); ?></td>
                            <td style="padding: 8px; border: 1px solid #ddd;"><?php echo htmlspecialchars($product['description']); ?></td>
                            <td style="padding: 8px; border: 1px solid #ddd;">$<?php echo $product['price']; ?></td>
                            <td style="padding: 8px; border: 1px solid #ddd;"><?php echo $product['stock']; ?></td>
                            <td style="padding: 8px; border: 1px solid #ddd;">
                                <a href="/product/edit?id=<?php echo $product['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="/product/delete?id=<?php echo $product['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No products found in the database.</p>
        <?php endif; ?>
    </div>
</div>

<?php include_once __DIR__ . '/partial/footer.php';?>