<?php

namespace Classes;

use Classes\Database;

class AuthController
{
    public static function reg(): void
    {
        $loginRaw = trim($_POST['login'] ?? '');
        $login = filter_var($loginRaw, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password = $_POST['password'] ?? '';

        if ($login === '' || $password === '') {
            $_SESSION['reg_error'] = 'Логін та пароль повинні бути заповнені';
            header('Location: /reg');
            exit;
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        Database::createUser($login, $hashedPassword);

        header('Location: /login');
        exit;
    }

    public static function login(): void
    {
        $loginRaw = trim($_POST['login'] ?? '');
        $login = filter_var($loginRaw, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password = $_POST['password'] ?? '';

        $user = Database::findUser($login);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['login'] = $login;
            header('Location: /');
            exit;
        }

        $_SESSION['login_error'] = 'Невірний логін або пароль';
        // keep the entered login (sanitized) so template can show it safely
        $_SESSION['old_login'] = $login;
        header('Location: /login');
        exit;
    }

    public static function logout(): void
    {
        session_destroy();
        header('Location: /login');
        exit;
    }
}