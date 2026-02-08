<table class="table mt-5 mb-5">
    <thead class="table-dark">
        <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Name</th>
            <th class="text-center">Description</th>
            <th class="text-center">Price</th>
            <th class="text-center">Stock</th>
            <th class="text-center">Created At</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody class="table-light">
        <?php foreach ($data as $product): ?>
            <tr>
                <td class="text-center"><?php echo $product['id'] ?? 'N/A'; ?></td>
                <td class="text-center"><?php echo $product['name'] ?? 'N/A'; ?></td>
                <td class="text-center"><?php echo $product['description'] ?? 'N/A'; ?></td>
                <td class="text-center">$<?php echo $product['price'] ?? 'N/A'; ?></td>
                <td class="text-center"><?php echo $product['stock'] ?? 'N/A'; ?></td>
                <td class="text-center"><?php echo $product['created_at'] ?? 'N/A'; ?></td>
                <td class="text-center">
                    <a href="/product/edit?id=<?php echo isset($product['id']) ? $product['id'] : 'N/A'; ?>"
                        class="btn btn-primary btn-sm">Edit</a>
                    <a href="/product/delete?id=<?php echo isset($product['id']) ? $product['id'] : 'N/A'; ?>"
                        class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>