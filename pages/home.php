<?php
// 1. Додаємо PHP-заголовок
$pageTitle = "HistoryTube | Головна сторінка";
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Всесвітня історія, цікаві факти про історію, артефакти">
    <meta name="keywords" content="Історія">
    <meta name="author" content="Устенко Валерія">
    
    <title><?= htmlspecialchars($pageTitle ?? 'HistoryTube', ENT_QUOTES, 'UTF-8') ?></title>
    
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DK+Loopet:wght@100..400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/styles/normalize.css"> 
    <link rel="stylesheet" href="/styles/styles.css">
    
    </head>

<body>

    
    
    <input type="checkbox" id="burger-toggle"/>
    <div class="hamburger-container">
        <label for="burger-toggle">
          <img src="/images/menu.svg" alt="Меню" class="hamburger-icon"> 
        </label>
    </div>

    <header>
      <div class="biger-box">
        <h1 class="title">HistoryTube</h1>
        <div class="big-box">
          <div class="search-bar">
            <p class="search-input">Пошук...</p>
          <a href="https://www.google.com/"><div class="search-icon"></div></a>
          </div>
          <div class="little-box">
            <div class="bell"></div>
            <div class="user"></div>
          </div>
        </div>
      </div>
      <menu>
        <li>Усе</li>
        <li>Рекомендовані</li>
        <li>Цікавинки</li>
        <li>Що нового?</li>
        <li>Економіка</li>
      </menu>
      <?php include 'nav.php'; ?>
    </header>

    <main>
      <div class="sidebar">
        <ul>
          <li><p>Головна</p></li>
          <li><p>Підписки</p></li>
          <li><p>Бібліотека</p></li>
          <li><p>Історія</p></li>
          <li><p>Відео</p></li>
          <li><p>Статті</p></li>
        </ul>
      </div>

      <div class="main-grid">
        </div> 
    </main>

    <footer class="footer">
      <div class ="footer-content" >
      <div class="footer-logo">HistoryTube</div>
        <ul class="footer-links">
        <li><a href="#">Контакти</a></li>
        <li><a href="#">Політика конфіденційності</a></li>
        <li><a href="#">FAQ</a></li>
        </ul>
        <div class="footer-copy">© 2025 HistoryTube. Усі права захищені.</div>
      </div>
    </footer>
    
    </body>
</html>