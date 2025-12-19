<?php

namespace Classes;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $connection = null;

    public static function getConnection(): PDO
    {
        if (self::$connection === null) {
            try {
                self::$connection = new PDO('sqlite:' . __DIR__ . '/../../database.sqlite');
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                
                self::$connection->exec("CREATE TABLE IF NOT EXISTS users (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    username TEXT UNIQUE,
                    password TEXT
                )");
            } catch (PDOException $e) {
                die("Помилка підключення: " . $e->getMessage());
            }
        }
        return self::$connection;
    }

    public static function findUser(string $username)
    {
        $db = self::getConnection();
        $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute(['username' => $username]);
        return $stmt->fetch();
    }

    public static function createUser(string $username, string $password): bool
    {
        try {
            $db = self::getConnection();
            $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
            return $stmt->execute([
                'username' => $username,
                'password' => $password 
            ]);
        } catch (PDOException $e) {
            return false;
        }
    }
}