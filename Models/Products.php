
<?php

require_once __DIR__ . '/../config.php';

class Products {
    
    public static function getAll() {
        try {
            $pdo = Database::connect();
            $stmt = $pdo->query("SELECT * FROM products");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            die("Error fetching products: " . $e->getMessage());
        }
    }
}
