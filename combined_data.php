<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$database = "environmental_data";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$tables = array("temperature", "humidity", "pressure", "soil_moisture", "soil_nutrients");
$combinedData = array();

foreach ($tables as $table) {
    $query = "SELECT * FROM $table ORDER BY timestamp DESC LIMIT 10";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $combinedData[] = array(
                "parameter" => ucfirst(str_replace("_", " ", $table)),
                "value" => $row['value'],
                "timestamp" => $row['timestamp']
            );
        }
    }
}

echo json_encode($combinedData);

$conn->close();
?>
