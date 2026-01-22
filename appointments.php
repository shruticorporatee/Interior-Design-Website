<?php
include "projects_db.php";

// Handle status update request
if (isset($_GET['update_status'])) {
    $appointment_id = intval($_GET['update_status']);
    $conn->query("UPDATE appointments SET status = 'Completed' WHERE id = $appointment_id");
    header("Location: appointments.php"); // reload page to prevent resubmit
    exit;
}

// Fetch all appointments
$result = $conn->query("
    SELECT a.*, c.subject 
    FROM appointments a 
    JOIN contacts c ON a.contact_id = c.id
    ORDER BY a.date, a.time
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointments</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 30px;
        }
        .table-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            max-width: 1000px;
            margin: auto;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
        }
        th {
            background-color: #007bff;
            color: #fff;
            text-align: center;
        }
        td {
            text-align: center;
            color: #343a40;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .status {
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
            color: #fff;
        }
        .Pending {
            background-color: #ffc107;
        }
        .Completed {
            background-color: #28a745;
        }
        .btn-complete {
            padding: 5px 10px;
            background-color: #89bbe4ff;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-complete:hover {
            background-color: #218838;
        }
        .btn-back {
            display: block;
            width: 180px;
            margin: 20px auto 0;
            text-align: center;
            background-color: #007bff;
            color: #fff;
            padding: 10px 0;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h1>Scheduled Appointments</h1>

<div class="table-container">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Client Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Time</th>
                <th>Purpose</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 1; while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $count ?></td>
                <td><?= htmlspecialchars($row['client_name']) ?></td>
                <td><?= htmlspecialchars($row['client_email']) ?></td>
                <td><?= $row['date'] ?></td>
                <td><?= $row['time'] ?></td>
                <td><?= htmlspecialchars($row['purpose']) ?></td>
                <td><span class="status <?= $row['status'] ?>"><?= $row['status'] ?></span></td>
                <td>
                
    <?php if ($row['status'] === "Pending") { ?>
        <a href="appointments.php?update_status=<?= $row['id'] ?>" style="color: blue; text-decoration: underline;">Mark Completed</a>
    <?php } else { ?>
        ✔ Done
    <?php } ?>
</td>

            </tr>
            <?php $count++; } ?>
        </tbody>
    </table>
    <a href="enquiries.php" class="btn-back">Back to Enquiries</a>
</div>

</body>
</html>
