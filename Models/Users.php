<?php

require_once __DIR__ . '/../config.php';

class Users {
    
    public static function getAll() {
        try {
            $pdo = Database::connect();
            $stmt = $pdo->query("SELECT * FROM users");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            die("Error fetching users: " . $e->getMessage());
        }
    }
}