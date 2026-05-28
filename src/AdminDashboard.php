<?php
session_start();

$servername = "mysql";
$username = "root";
$password = "password";

try {
    $conn = new mysqli($servername, $username, $password, "mydb");
} catch (mysqli_sql_exception) {
    echo "Could not connect";
    exit();
}


?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Beheerderspaneel</title>
    <link rel="stylesheet" href="/css/AD.css">
</head>
<body>
<div class= "navbar">
    <a href="#" class="nav-item active">
    <i class="icon">⌂</i>
    <span>Dashboard</span>
  </a>

  <a href="#" class="nav-item">
    <i class="icon">👥</i>
    <span>Instructeurs</span>
  </a>

  <a href="#" class="nav-item">
    <i class="icon">👤</i>
    <span>Leerlingen</span>
  </a>

  <a href="#" class="nav-item">
    <i class="icon">🚗</i>
    <span>Wagenpark</span>
  </a>

</div>
</body>
</html>