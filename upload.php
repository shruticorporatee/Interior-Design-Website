<?php
include "projects_db.php"; // your DB connection

$title = $_POST['title'];
$category = $_POST['category'];
$image = $_FILES['image']['name'];
$target = "uploads/" . basename($image);


// Move uploaded file
if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
    // Insert into projects table
    $sql = "INSERT INTO projects (title, category, image) VALUES ('$title', '$category', '$image')";
    if($conn->query($sql) === TRUE){
        // Insert into project_logs table
        $log_sql = "INSERT INTO project_logs (action, project_title) VALUES ('Added', '$title')";
        $conn->query($log_sql);

        header("Location: project.php");
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Failed to upload image.";
}

$conn->close();
?>
