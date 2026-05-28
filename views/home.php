<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage — <?= htmlspecialchars(APP_NAME, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <?php require __DIR__ . '/partials/header.php'; ?>

    <main class="page page--with-header">
        <section class="card">
            <div class="card-header">
                <h1>Homepage</h1>
                <p>Startpunt van je rijschool-app</p>
            </div>
            <div class="card-body">
                <?php if (isLoggedIn()): ?>
                    <p class="success-msg">
                        Ingelogd als
                        <strong><?= htmlspecialchars(roleLabel($_SESSION['role']), ENT_QUOTES, 'UTF-8') ?></strong>
                        <span class="email"><?= htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8') ?></span>
                    </p>
                    <a href="login.php?logout=1" class="btn btn-secondary btn-link">Uitloggen</a>
                <?php else: ?>
                    <p class="success-msg">
                        Je bent nog niet ingelogd.
                        <span class="email">Ga naar de login om verder te gaan.</span>
                    </p>
                    <a href="login.php" class="btn btn-primary btn-link">Naar inloggen</a>
                <?php endif; ?>
            </div>
        </section>
    </main>
</body>
</html>

