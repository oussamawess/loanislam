<?php
require_once 'db.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $new_fees = (float) $_POST['fees'];

    // Update the fees in the database
    $stmt = $conn->prepare("UPDATE fees SET fees = ? WHERE id = 1"); // Assuming there's only one row
    $stmt->bind_param("d", $new_fees);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Frais mis à jour avec succès."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Échec de la mise à jour des frais."]);
    }
}
?>