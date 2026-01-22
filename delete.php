<?php
include "projects_db.php";

$id = $_GET['id'];

// Get project title before deletion
$result = $conn->query("SELECT title FROM projects WHERE id = $id");
$row = $result->fetch_assoc();
$title = $row['title'];

// Delete from projects table
if($conn->query("DELETE FROM projects WHERE id = $id") === TRUE){
    // Insert into project_logs table
    $log_sql = "INSERT INTO project_logs (action, project_title) VALUES ('Deleted', '$title')";
    $conn->query($log_sql);

    header("Location: project.php");
} else {
    echo "Error deleting project: " . $conn->error;
}

$conn->close();
?>
