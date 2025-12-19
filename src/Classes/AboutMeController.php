<?php

namespace Classes;

/**
 * Контролер для сторінки "Про автора"
 * @package Classes
 * @author Устенко Валерія
 */
class AboutMeController
{
    /**
     * Відображає сторінку About Me
     * @return void
     */
    public static function showAboutPage(): void
    {
        // Спроба отримати дані з бази даних
        $userFromDb = Database::findUser('Leraaaaaa-codder');

        $data = [
            'title'       => 'Про мене | KN24 Project',
            'fullName'    => $userFromDb['username'] ?? 'Устенко Валерія',
            'description' => 'Я сонечко, робила дз до 4 ранку!',
            'skills'      => ['PHP 8', 'Composer', 'Latte', 'SQLite'],
            'socials'     => [
                'GitHub' => 'https://github.com/Leraaaaaa-codder',
                'Telegram' => '@Leraaaa'
            ]
        ];

        // Рендеринг шаблону (файл src/templates/aboutme.latte)
        Viewer::show('aboutme', $data);
    }
}