<?php
// Встановлюємо динамічний заголовок
$pageTitle = "404 | Сторінку не знайдено";
// Встановлюємо HTTP-код відповіді 404, щоб повідомити браузер і пошукові системи
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= htmlspecialchars($pageTitle ?? 'Помилка', ENT_QUOTES, 'UTF-8') ?></title>
    
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DK+Loopet:wght@100..400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/styles/normalize.css"> 
    <link rel="stylesheet" href="/styles/styles.css">
</head>
<body>

    <?php include 'nav.php'; ?> 

    <div class="error-container">
        <div class="site-title">HistoryTube</div>
        <div class="error-code">404</div>
        <div class="error-message">На жаль, сторінку не знайдено :(</div>
        
        <a href="/" class="btn-primary">
            Повернутися на головну
        </a>
    </div>
</body>
</html>