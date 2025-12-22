<?php

namespace Classes;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $db = null;

    public static function getConnection(): PDO
    {
        if (self::$db === null) {
            self::$db = new PDO('sqlite:' . __DIR__ . '/../../database.sqlite');
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            self::$db->exec("
                CREATE TABLE IF NOT EXISTS users (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    login TEXT UNIQUE,
                    password TEXT
                )
            ");
        }
        return self::$db;
    }

    // 🔐 SELECT — параметризований
    public static function findUser(string $login): ?array
    {
        $stmt = self::getConnection()->prepare(
            "SELECT * FROM users WHERE login = :login"
        );
        $stmt->execute(['login' => $login]);
        return $stmt->fetch() ?: null;
    }

    // 🔐 INSERT — параметризований
    public static function createUser(string $login, string $hashedPassword): bool
    {
        $stmt = self::getConnection()->prepare(
            "INSERT INTO users (login, password) VALUES (:login, :password)"
        );
        return $stmt->execute([
            'login' => $login,
            'password' => $hashedPassword
        ]);
    }
}
