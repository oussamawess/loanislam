<?php
include 'db.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["client_id"])) {
    $client_id = intval($_POST["client_id"]); // Secure the input

    // Update payment table
    $update_payment = "UPDATE payment 
                       SET status = 'paid', has_been_read_admin = 0, updated_at = NOW() 
                       WHERE id_client = ?";
    $stmt = $conn->prepare($update_payment);
    $stmt->bind_param("i", $client_id);
    $stmt->execute();

    // Update client table
    $update_client = "UPDATE client SET statut = 'signé' WHERE id = ?";
    $stmt2 = $conn->prepare($update_client);
    $stmt2->bind_param("i", $client_id);
    $stmt2->execute();

    if ($stmt->affected_rows > 0 || $stmt2->affected_rows > 0) {
        echo "Database updated successfully.";
    } else {
        echo "No changes made.";
    }

    $stmt->close();
    $stmt2->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
