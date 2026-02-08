<?php
class Database {
    private static $host = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $database = "phpmvc";

    public static function connect() {
        $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$database;
        try {
            $pdo = new PDO($dsn, self::$username, self::$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}