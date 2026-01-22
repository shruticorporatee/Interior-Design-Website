<?php
include "db.php";

if(isset($_POST['title'], $_POST['description']) && isset($_FILES['image'])){
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);

    // Handle image upload
    if ($_FILES['image']['error'] === 0) {
        $uploadDir = "img/";
        $filename = time() . "_" . basename($_FILES['image']['name']);
        $targetFile = $uploadDir . $filename;

        if(move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)){
            // Insert into DB
            $sql = "INSERT INTO services (image, title, description) VALUES ('$filename', '$title', '$description')";
           if ($conn->query($sql) === TRUE) {
    // Log this addition
    $conn->query("INSERT INTO service_logs (action, service_title) VALUES ('Added', '$title')");
    
    header("Location: service1.php");
    exit;
} else {
    echo "Database Error: " . $conn->error;
}

        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "Please select a valid image.";
    }
} else {
    echo "Please provide image, title, and description!";
}

$conn->close();
?>
