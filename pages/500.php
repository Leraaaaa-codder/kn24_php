<?php
// Встановлюємо динамічний заголовок
$pageTitle = "500 | Внутрішня помилка сервера";
// Встановлюємо HTTP-код відповіді 500
http_response_code(500);
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?= htmlspecialchars($pageTitle ?? 'Помилка сервера', ENT_QUOTES, 'UTF-8') ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DK+Loopet:wght@100..400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/styles/normalize.css"> 
    <link rel="stylesheet" href="/styles/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" href="/images/icons/favicon.ico" sizes="any">
    <link rel="manifest" href="/images/icons/site.webmanifest">

    <style>
        body {
            background-color: #6d4c41;
            color: #fff;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            text-align: center;
           
        }

        .site-title {
            font-family: "Playwrite DK Loopet", cursive;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .error-code {
            font-size: 6rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .error-message {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: #fff;
            color: #6d4c41;
            border: none;
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: #f0f0f0;
            color: #5d4037;
        }

        .hint {
            font-size: 1rem;
            opacity: 0.8;
            margin-top: 10px;
        }
    </style>
</head>
 <?php include 'nav.php'; ?> 
<body>
    <div class="site-title">HistoryTube</div>
    <div class="error-code">500</div>
    <div class="error-message">Внутрішня помилка сервера 😔</div>
    
    <a href="/" class="btn btn-primary">Повернутися на головну</a>
    
    <div class="hint">Спробуйте пізніше або повідомте адміністратора.</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>