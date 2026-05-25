<?php
session_start();

$servername = "mysql";
$username = "root";
$password = "password";

try {
    $conn = new mysqli($servername, $username, $password, "tools4ever");
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
    <link rel="stylesheet" href="#">
</head>
<body>

</body>
</html>