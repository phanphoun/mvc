

<?php
include_once __DIR__ . '/partial/navigation.php';


?>

<h1>Welcome to Home Page!</h1>

<?php if ($data): ?>
    <h2>Task: <?php echo $data['title']; ?></h2>
    <p>Description: <?php echo $data['description']; ?></p>
    <p>Status: <?php echo $data['status']; ?></p>
<?php else: ?>
    <p>No tasks found.</p>
<?php endif; ?>