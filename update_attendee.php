<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_tracker";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $attendee_id = $_POST['attendee_id'];
    $new_name = $_POST['new_name'];
    $new_email = $_POST['new_email'];

    $stmt = $conn->prepare("UPDATE attendees SET name = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssi", $new_name, $new_email, $attendee_id);
    if ($stmt->execute()) {
        echo "تم تحديث الحاضر بنجاح.";
    } else {
        echo "فشل في تحديث الحاضر: " . $stmt->error;
    }
}

$conn->close();
?>
