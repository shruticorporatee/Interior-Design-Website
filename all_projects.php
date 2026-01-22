<?php
include "projects_db.php";

// Fetch all project logs with their categories
$result = $conn->query("
    SELECT pl.id, pl.project_title, pl.created_at, p.category 
    FROM project_logs pl
    LEFT JOIN projects p ON pl.project_title = p.title
    ORDER BY pl.created_at DESC
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Logs</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { 
            background-color: #f8f8f8ff; /* light gray background like other pages */
            font-family: 'Montserrat', Arial, sans-serif; 
            padding: 20px; 
        }
        h1 { 
            text-align: center; 
            color: #41a3d8ff; /* primary blue heading */
            font-family: 'Oswald', sans-serif;
            margin-bottom: 30px;
        }
        .table-container { 
            background-color: #ffffff; /* white box like other sections */
            padding: 25px; 
            border-radius: 10px; 
            max-width: 1100px; 
            margin: 20px auto; 
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
        }
        th { 
            background-color: #41a3d8ff; /* secondary header color */
            color: #ffffff; 
            font-weight: 500;
            text-align: center;
        }
        td { 
            color: #020202ff; /* dark text for readability */
            text-align: center;
        }
        tr:nth-child(even) { 
            background-color: #f2f2f2; 
        }
        .btn-back { 
            display: block; 
            width: 180px; 
            margin: 30px auto 0; 
            text-align: center; 
            background-color: #007bff; 
            color: #ffffff; 
            padding: 10px 0; 
            border-radius: 5px; 
            text-decoration: none; 
            font-weight: 500;
        }
        .btn-back:hover { 
            background-color: #0056b3; 
        }
    </style>
</head>
<body>

<h1>All Project Logs</h1>

<div class="table-container">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Category</th>
                <th>Project Title</th>
                <th>Date & Time</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $count = 1;
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $category = '';
                    if($row['category'] == 'first') $category = 'Complete';
                    elseif($row['category'] == 'second') $category = 'Running';
                    elseif($row['category'] == 'third') $category = 'Upcoming';
                    else $category = $row['category'];

                    echo "<tr>";
                    echo "<td>".$count."</td>";
                    echo "<td>".$category."</td>";
                    echo "<td>".$row['project_title']."</td>";
                    echo "<td>".$row['created_at']."</td>";
                    echo "</tr>";
                    $count++;
                }
            } else {
                echo '<tr><td colspan="4" class="text-center text-secondary">No project logs found</td></tr>';
            }
            $conn->close();
            ?>
        </tbody>
    </table>

    <a href="project.php" class="btn-back"><i class="fas fa-arrow-left mr-2"></i>Back to Project</a>
</div>

</body>
</html>
