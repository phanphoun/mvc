<?php include_once __DIR__ . '/../partial/header.php'; ?>
<?php include_once __DIR__ . '/../partial/navigation.php'; ?>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Products</h2>
        <a href="/product/create" class="btn btn-primary">Add New Product</a>
    </div>
    <table border="1 solid black" style="border-collapse: collapse; width: 100%; margin-top: 20px; text-align: center; font-size: 16px;">
        <thead style="background-color: #cab0b0ff; text-align: center;">
            <tr style="text-align: center;">
                <th style="padding: 8px;">id</th>
                <th style="padding: 8px;">name</th>
                <th style="padding: 8px;">description</th>
                <th style="padding: 8px;">price</th>
                <th style="padding: 8px;">stock</th>
                <th style="padding: 8px;">action</th>
            </tr>
        </thead>
        <tbody style="background-color: #f2f2f2; text-align: center;">
            <?php foreach ($data as $row) { ?>
                <tr style="text-align: center;">

                    <td style="padding: 8px; "><?php echo $row['id']; ?></td>
                    <td style="padding: 8px; "><?php echo $row['name']; ?></td>
                    <td style="padding: 8px; "><?php echo $row['description']; ?></td>
                    <td style="padding: 8px; "><?php echo $row['price']; ?></td>
                    <td style="padding: 8px; "><?php echo $row['stock']; ?></td>
                    <td style="padding: 8px; ">
                        <a href="/product/edit?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="/product/delete?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    <?php include_once __DIR__ . '/../partial/footer.php'; ?>