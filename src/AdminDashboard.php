<?php
session_start();

$servername = "mysql";
$username = "root";
$password = "password";

try {
    $conn = new mysqli($servername, $username, $password, "Eend");
} catch (mysqli_sql_exception) {
    echo "Could not connect";
    exit();
}

$adminNaam = "Admin";

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Beheerderspaneel</title>
    <link rel="stylesheet" href="/css/AD.css">
</head>
<body>


<div class="container">

    <!-- TOPBAR -->
    <header class="topbar">
        <div class="logo-section">
            <h2>👋 <?php echo $adminNaam; ?></h2>
            <span class="badge">Admin</span>
            <p>Rijschool Dashboard</p>
        </div>

        <a href="logout.php" class="logout-btn">Uitloggen →</a>
    </header>

    <!-- NAVIGATIE -->
    <div class="nav-grid">
        <a href="http://localhost/AdminDashboard.php" class="nav-card active">Dashboard</a>
        <a href="http://localhost/AdminGebruikers.php" class="nav-card">Gebruikers</a>
        <a href="#" class="nav-card">Rooster</a>
        <a href="#" class="nav-card">Profiel</a>
    </div>


</div>

</body>
</html>