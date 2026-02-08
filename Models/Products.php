<?php

require_once __DIR__ . '/../config.php';

class Products
{

    public static function getAll()
    {
        try {
            $pdo = Database::connect();
            $stmt = $pdo->query("SELECT * FROM products");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error fetching products: " . $e->getMessage());
        }
    }

    public static function getById($id)
    {
        try {
            $pdo = Database::connect();
            $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error fetching product: " . $e->getMessage());
        }
    }

    public static function create($name, $description, $price, $stock)
    {
        try {
            $pdo = Database::connect();
            $stmt = $pdo->prepare("INSERT INTO products (name, description, price, stock) VALUES (?, ?, ?, ?)");
            return $stmt->execute([$name, $description, $price, $stock]);
        } catch (PDOException $e) {
            die("Error creating product: " . $e->getMessage());
        }
    }

    public static function update($id, $name, $description, $price, $stock)
    {
        try {
            $pdo = Database::connect();
            $stmt = $pdo->prepare("UPDATE products SET name = ?, description = ?, price = ?, stock = ? WHERE id = ?");
            return $stmt->execute([$name, $description, $price, $stock, $id]);
        } catch (PDOException $e) {
            die("Error updating product: " . $e->getMessage());
        }
    }

    public static function delete($id)
    {
        try {
            $pdo = Database::connect();
            $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
            return $stmt->execute([$id]);
        } catch (PDOException $e) {
            die("Error deleting product: " . $e->getMessage());
        }
    }
}
