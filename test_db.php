<?php
require_once __DIR__ . '/config.php';

try {
    $pdo = Database::connect();
    echo "✅ Database connection successful!\n";
    
    // Test if tables exist
    $stmt = $pdo->query("SHOW TABLES");
    $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);
    echo "📊 Tables found: " . implode(', ', $tables) . "\n";
    
} catch (PDOException $e) {
    echo "❌ Database connection failed: " . $e->getMessage() . "\n";
}
?>
