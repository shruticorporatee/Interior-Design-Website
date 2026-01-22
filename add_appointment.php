<?php
include "projects_db.php";

if(isset($_GET['contact_id'])){
    $contact_id = $_GET['contact_id'];
    $contact = $conn->query("SELECT * FROM contacts WHERE id = $contact_id")->fetch_assoc();
}

if(isset($_POST['submit'])){
    $contact_id = $_POST['contact_id'];
    $client_name = $_POST['client_name'];
    $client_email = $_POST['client_email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $purpose = $_POST['purpose'];

    $stmt = $conn->prepare("INSERT INTO appointments (contact_id, client_name, client_email, date, time, purpose) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss", $contact_id, $client_name, $client_email, $date, $time, $purpose);
    $stmt->execute();

    header("Location: appointments.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Schedule Appointment</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffffff;
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            max-width: 500px;
            margin: auto;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }
        h2 {
            text-align: center;
            color: #0d0e0fff;
            margin-bottom: 25px;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Schedule Appointment</h2>
    <form method="POST">
        <input type="hidden" name="contact_id" value="<?= $contact['id'] ?>">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="client_name" class="form-control" value="<?= $contact['name'] ?>" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="client_email" class="form-control" value="<?= $contact['email'] ?>" required>
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Time</label>
            <input type="time" name="time" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Purpose</label>
            <input type="text" name="purpose" class="form-control" placeholder="Consultation, Site Visit..." required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add Appointment</button>
    </form>
</div>

</body>
</html>
