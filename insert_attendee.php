<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_tracker";  // Ensure this matches your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect data from the form
$name = $_POST['name'];
$email = $_POST['email'];

// Insert into the database
$sql = "INSERT INTO attendees (name, email, meeting1, meeting2, meeting3, status)
        VALUES ('$name', '$email', 0, 0, 0, 'green')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: index.html");  // Redirect back to index.html after insert
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
