<?php
// динамічний заголовок
$pageTitle = "Авторизація | HistoryTube";
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= htmlspecialchars($pageTitle ?? 'Вхід', ENT_QUOTES, 'UTF-8') ?></title>
    
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DK+Loopet:wght@100..400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/styles/normalize.css"> 
    <link rel="stylesheet" href="/styles/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="icon" href="/images/icons/favicon.ico" sizes="any">
    <link rel="manifest" href="/images/icons/site.webmanifest">
</head>
<body style="background-color: #6d4c41;"> 

    <?php include 'nav.php'; ?>

    <div class="site-title" style="text-align: center; font-size: 2.5rem; color: #fff; margin-top: 20px;">
        HistoryTube
    </div>

    <div class="container my-5">
        <div class="login-container" style="max-width: 400px; margin: 0 auto; background-color: #fff; color: #242323ff; padding: 30px; border-radius: 8px; box-shadow: 0 0 20px rgba(0,0,0,0.3);">
            <h2 class="text-center mb-4">Вхід до системи</h2>
            
            <form method="POST" action="">
                
                <div class="mb-3">
                    <label for="login" class="form-label">Логін</label>
                    <input type="text" class="form-control" id="login" name="login" placeholder="Логін" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Введіть пароль" required>
                </div>
                
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Запам'ятати мене</label>
                </div>
                
                <button type="submit" class="btn btn-primary w-100" style="background-color: #6d4c41; border: none;">Увійти</button>
                
                <p class="text-center mt-3" style="font-size: 0.9rem;">
                    Ще не маєте облікового запису? 
                    <a href="/register" style="color: #6d4c41; text-decoration: none;">Зареєструватись</a>
                </p>
            </form>
        </div>
    </div>
    
    </body>
</html>