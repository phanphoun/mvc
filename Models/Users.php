<?php

require_once __DIR__ . '/../config.php';

class Users
{

    public static function getAll()
    {
        try {
            $pdo = Database::connect();
            $stmt = $pdo->query("SELECT * FROM users");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error fetching users: " . $e->getMessage());
        }
    }

    public static function getById($id)
    {
        try {
            $pdo = Database::connect();
            $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error fetching user: " . $e->getMessage());
        }
    }

    public static function create($name, $email)
    {
        try {
            $pdo = Database::connect();
            $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
            return $stmt->execute([$name, $email]);
        } catch (PDOException $e) {
            die("Error creating user: " . $e->getMessage());
        }
    }

    public static function update($id, $name, $email)
    {
        try {
            $pdo = Database::connect();
            $stmt = $pdo->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
            return $stmt->execute([$name, $email, $id]);
        } catch (PDOException $e) {
            die("Error updating user: " . $e->getMessage());
        }
    }

    public static function delete($id)
    {
        try {
            $pdo = Database::connect();
            $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
            return $stmt->execute([$id]);
        } catch (PDOException $e) {
            die("Error deleting user: " . $e->getMessage());
        }
    }
}