<?php
include "db.php"; // Database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Service Logs</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Page background */
        body {
            background-color: #f9ac53ff; /* .bg-dark for page background */
            font-family: Arial, sans-serif;
        }

        /* Container for table */
        .table-container {
            background-color: #956332ff; /* .bg-white for content */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
            max-width: 900px;
            margin: 50px auto;
        }

        /* Heading */
        h2 {
            color: #007bff; /* .text-primary */
            text-align: center;
            margin-bottom: 30px;
        }

        /* Table header */
        .table thead {
            background-color: #6c757d; /* .bg-secondary */
            color: #ffffff; /* .text-white */
        }

        /* Table body rows */
        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2; /* light alternating row */
        }

        /* Table cell text */
        td {
            color: #6c757d; /* .text-secondary */
        }

        /* Back button */
        .btn-back {
            display: block;
            width: 150px;
            margin: 20px auto 0;
            background-color: #007bff; /* .bg-primary */
            color: #ffffff; /* .text-white */
            border: none;
        }
        .btn-back:hover {
            background-color: #0056b3;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h2>Service Logs</h2>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Action</th>
                    <th>Service Title</th>
                    <th>Date & Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM service_logs ORDER BY created_at DESC");
                $count = 1;
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo '<tr>';
                        echo '<td>'.$count.'</td>';
                        echo '<td>'.$row['action'].'</td>';
                        echo '<td>'.$row['service_title'].'</td>';
                        echo '<td>'.$row['created_at'].'</td>';
                        echo '</tr>';
                        $count++;
                    }
                } else {
                    echo '<tr><td colspan="4" class="text-center text-secondary">No logs available</td></tr>';
                }
                ?>
            </tbody>
        </table>

        <a href="home.html" class="btn btn-back">Back to Home</a>
    </div>
</body>
</html>
<?php $conn->close(); ?>
