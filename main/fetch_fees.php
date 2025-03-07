<?php
require_once 'db.php'; // Include your database connection file

// Fetch the current fees
$query = "SELECT id, fees FROM fees LIMIT 1"; // Assuming there's only one row
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode(["status" => "success", "fees" => $row['fees']]);
} else {
    echo json_encode(["status" => "error", "message" => "No fees found."]);
}
?>