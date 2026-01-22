<?php
include "db.php";

$result = $conn->query("SELECT * FROM services");
while ($row = $result->fetch_assoc()) {
    echo '
    <div class="d-flex flex-column text-center bg-light mx-3 p-4">
        <img src="img/'.$row['image'].'" class="service-image" alt="'.$row['title'].'" style="height:100px; object-fit:cover;">
        <h5 class="mb-3">'.$row['title'].'</h5>
        <p class="m-0">'.$row['description'].'</p>
        <button class="btn btn-danger btn-sm mt-2" onclick="removeService('.$row['id'].')">Remove</button>
    </div>';
}
$conn->close();
?>
