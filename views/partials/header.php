<?php
/** @var string $active */
$active = $active ?? '';
?>
<header class="site-header" role="banner">
    <div class="site-header__inner">
        <div class="site-header__brand">
            <span class="site-header__title"><?= htmlspecialchars(APP_NAME, ENT_QUOTES, 'UTF-8') ?></span>
        </div>
        <nav class="site-header__nav" aria-label="Hoofdnavigatie">
            <a class="nav-btn<?= $active === 'home' ? ' nav-btn--active' : '' ?>" href="home.php">Homepage</a>
            <a class="nav-btn<?= $active === 'login' ? ' nav-btn--active' : '' ?>" href="login.php">Inloggen</a>
        </nav>
    </div>
</header>
