<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_tracker";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM attendees";
$result = $conn->query($sql);

$attendees = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $attendees[] = $row;
    }
}

$conn->close();


echo json_encode($attendees);
?>
