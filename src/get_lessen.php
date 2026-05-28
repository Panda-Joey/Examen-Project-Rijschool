<?php
$servername = "mysql";
$username = "root";
$password = "password";
$dbname = "Eend";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);


if(isset($_GET['datum'])){

    $datum = $_GET['datum'];

    $sql = "
    SELECT 
        lessen.*,
        instructeurs.voornaam,
        instructeurs.achternaam

    FROM lessen

    JOIN instructeurs
    ON lessen.instructeurID = instructeurs.instructeurID

    WHERE lesDatum = ?
    ";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s", $datum);

    $stmt->execute();

    $result = $stmt->get_result();

    $lessen = [];

    while($row = $result->fetch_assoc()){

        $lessen[] = [
            "lesID" => $row['lesID'],
            "datum" => $row['lesDatum'],
            "tijd" => substr($row['lestijd'], 0, 5),
            "doel" => $row['doel'],
            "onderwerpen" => $row['onderwerpen'],
            "ophaalLocatie" => $row['ophaalLocatie'],
            "instructeur" => $row['voornaam'] . " " . $row['achternaam']
        ];
    }

    header('Content-Type: application/json');

    echo json_encode($lessen);
}
?>