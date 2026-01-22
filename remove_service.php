<?php
include "db.php";

$id = $_POST['id'];
$res = $conn->query("SELECT title FROM services WHERE id=$id");
$row = $res->fetch_assoc();
$title = $row['title'];
$sql = "DELETE FROM services WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    // Log the deletion
    $conn->query("INSERT INTO service_logs (action, service_title) VALUES ('Deleted', '$title')");
    echo "Service deleted successfully!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>