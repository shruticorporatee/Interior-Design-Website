<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "interior"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data
$sql = "SELECT id, name, email, subject, message, created_at FROM contacts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Submissions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #d2e8f1ff; /* Keep your original bg */
        }
        .btn-scheduled {
            background-color: #6c757d !important;
            border-color: #446b8eff !important;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Total Enquiries</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Submitted At</th>
                <th>Schedule</th>
            </tr>
        </thead>
        <tbody>
            <?php
$count = 1;
while($row = $result->fetch_assoc()){
    // Check if appointment exists for this contact
    $check = $conn->query("SELECT * FROM appointments WHERE contact_id = " . $row['id']);
    $is_scheduled = $check->num_rows > 0;

    echo "<tr>";
    echo "<td>".$count."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['subject']."</td>";
    echo "<td>".$row['message']."</td>";
    echo "<td>".$row['created_at']."</td>";

    // Schedule button
    if($is_scheduled){
        echo "<td><button class='btn btn-sm btn-scheduled' disabled>Scheduled</button></td>";
    } else {
        echo "<td><a href='add_appointment.php?contact_id=".$row['id']."' class='btn btn-sm btn-primary'>Schedule Appointment</a></td>";
    }

    echo "</tr>";
    $count++;
}
?>
        </tbody>
    </table>

    <!-- Single button to view all appointments -->
    <a href="appointments.php" class="btn btn-info mb-3">View All Appointments</a>

  <a href="home.html" class="btn btn-info mb-3">back to page</a>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
