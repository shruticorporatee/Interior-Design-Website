<?php
// Database connection settings
$servername = "localhost";  // usually localhost
$username = "root";         // default username in XAMPP/WAMP
$password = "";             // default password in XAMPP/WAMP is empty
$dbname = "interior";       // your existing database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if connection works
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
