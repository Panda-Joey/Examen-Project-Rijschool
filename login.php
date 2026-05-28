<?php

require_once __DIR__ . '/includes/bootstrap.php';
require_once __DIR__ . '/includes/auth.php';

if (isset($_GET['logout'])) {
    logout();
    header('Location: login.php');
    exit;
}

$error = '';
$loggedIn = isLoggedIn();

if (!$loggedIn && isset($_GET['test'])) {
    $result = attemptTestLogin($_GET['test']);
    if ($result === null) {
        header('Location: login.php');
        exit;
    }
    $error = $result;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !$loggedIn) {
    $result = attemptLogin(
        trim($_POST['email'] ?? ''),
        $_POST['password'] ?? ''
    );

    if ($result === null) {
        $loggedIn = true;
    } else {
        $error = $result;
    }
}

require __DIR__ . '/views/login.view.php';
