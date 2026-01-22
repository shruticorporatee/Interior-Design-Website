<?php
// Database connection settings
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'interior';

// Create a connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the JSON input
$data = json_decode(file_get_contents("php://input"), true);
$name = $conn->real_escape_string($data['name']);
$email = $conn->real_escape_string($data['email']);

// Prepare and bind
$query = "INSERT INTO newsletter_subscribers (name, email) VALUES (?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $name, $email);

// Execute the statement
if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $stmt->error]);
}

// Close connections
$stmt->close();
$conn->close();
?>
