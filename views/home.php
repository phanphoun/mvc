<?php
include_once __DIR__ . '/partial/navigation.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="users">
        <div class="user">
            <h1>Total users: <?php echo count($data['users']); ?></h1>
        </div>
        <div class="product">
            <h1>Total products: <?php echo count($data['products']); ?></h1>
        </div>
    </div>
</body>
</html>
