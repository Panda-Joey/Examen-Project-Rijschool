<?php

function isLoggedIn()
{
    return isset($_SESSION['user']);
}

function roleLabel($role)
{
    return ROLES[$role] ?? 'Gebruiker';
}

function logout()
{
    session_destroy();
}

function attemptTestLogin($role)
{
    if (!ENABLE_TEST_LOGIN || !isset(ROLES[$role])) {
        return 'Test-inlog niet beschikbaar.';
    }

    foreach (DEMO_USERS as $email => $user) {
        if ($user['role'] === $role) {
            $_SESSION['user'] = $email;
            $_SESSION['role'] = $role;
            return null;
        }
    }

    return 'Test-account niet gevonden.';
}

function attemptLogin($email, $password)
{
    if ($email === '' || $password === '') {
        return 'Vul e-mail en wachtwoord in.';
    }

    $user = DEMO_USERS[$email] ?? null;

    if ($user === null || !password_verify($password, DEMO_PASSWORD_HASH)) {
        return 'Ongeldige e-mail of wachtwoord.';
    }

    $_SESSION['user'] = $email;
    $_SESSION['role'] = $user['role'];

    return null;
}
