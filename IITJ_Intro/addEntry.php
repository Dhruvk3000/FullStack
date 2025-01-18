<?php
$servername = "localhost";
$username = "root";
$password = "Yolonosotidobro!2004";
$dbname = "ajax_form_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $alias = $_POST['alias'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (name, email, alias) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $alias);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Method not allowed";
}
?>
