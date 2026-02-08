<table class="table mt-5 mb-5">
    <thead class="table-dark">
        <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Created At</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody class="table-light">
        <?php foreach ($data as $user): ?>
            <tr>
                <td class="text-center"><?php echo isset($user['id']) ? $user['id'] : 'N/A'; ?></td>
                <td class="text-center"><?php echo isset($user['name']) ? $user['name'] : 'N/A'; ?></td>
                <td class="text-center"><?php echo isset($user['email']) ? $user['email'] : 'N/A'; ?></td>
                <td class="text-center"><?php echo isset($user['created_at']) ? $user['created_at'] : 'N/A'; ?></td>
                <td class="text-center">
                    <a href="/user/edit?id=<?php echo isset($user['id']) ? $user['id'] : 'N/A'; ?>"
                        class="btn btn-primary btn-sm">Edit</a>
                    <a href="/user/delete?id=<?php echo isset($user['id']) ? $user['id'] : 'N/A'; ?>"
                        class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>