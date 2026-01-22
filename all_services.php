<?php
include "db.php"; // your DB connection

// Fetch all service logs ordered by newest first
$result = $conn->query("SELECT * FROM service_logs ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Services Log</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f4f2ff; /* .bg-dark for full page background */
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: rgba(51, 51, 238, 1); /* .text-primary for heading */
        }

        .table-container {
            background-color: #ffffff; /* .bg-white for table container */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
            max-width: 1000px;
            margin: 20px auto;
        }

        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px; 
        }

        th, td { 
            padding: 12px; 
            border: 1px solid #ccc; 
            text-align: left; 
        }

        th { 
            background-color: #41a3d8ff; /* .bg-secondary for table header */
            color: #ffffff; /* .text-white for header text */
        }

        tr:nth-child(even) { 
            background-color: #f2f2f2; /* light alternate rows */
        }

        td {
            color: #000000ff; /* .text-secondary for table content */
        }

        .btn-back {
            display: block;
            width: 150px;
            margin: 20px auto 0;
            text-align: center;
            background-color: #41a3d8ff; /* .bg-primary for button */
            color: #ffffff; /* .text-white */
            padding: 10px 0;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-back:hover {
            background-color: #0056b3;
            color: #ffffff;
        }
    </style>
</head>
<body>

<h1>All Services Log</h1>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Action</th>
                <th>Service Title</th>
                <th>Added / Deleted At</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".htmlspecialchars($row['id'])."</td>";
                    echo "<td>".htmlspecialchars($row['action'])."</td>";
                    echo "<td>".htmlspecialchars($row['service_title'])."</td>";
                    echo "<td>".htmlspecialchars($row['created_at'])."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4' class='text-center'>No records found.</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>

    <a href="home.html" class="btn-back">Back to Home</a>
</div>

</body>
</html>
