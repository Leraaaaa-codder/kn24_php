<?php
?>
<style>
    .nav{background: #6d4c41;}
</style>
<nav class="nav">
    <a href="/" class="nav_link">Головна</a>

    <a href="/game" class="nav_link">Game</a>

    <?php if(isset($_SESSION['login'])): ?>
        <a href="?logout=1" class="nav_link">Logout</a>
    <?php else: ?>
        <a href="/login" class="nav_link">Login</a>
    <?php endif ?>

</nav>