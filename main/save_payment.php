<?php
include 'db.php'; // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id_client"])) {
    $id_client = intval($_POST["id_client"]); // Sanitize input

    // Fetch fees from the fees table
    $fees_query = "SELECT fees FROM fees ";
    $stmt_fees = $conn->prepare($fees_query);
    $stmt_fees->execute();
    $result_fees = $stmt_fees->get_result();

    if ($result_fees->num_rows > 0) {
        $fees_row = $result_fees->fetch_assoc();
        $fees = $fees_row["fees"];
    } else {
        echo "Aucune donnée de frais trouvée pour ce client.";
        exit;
    }

    // Insert data into the payment table
    $insert_query = "INSERT INTO payment (id_client, fees, status, has_been_read, has_been_read_admin, created_at) 
                     VALUES (?, ?, 'notpaid', 0, NULL, NOW())";
    $stmt = $conn->prepare($insert_query);
    $stmt->bind_param("id", $id_client, $fees);

    if ($stmt->execute()) {
        echo "La demande de paiement a été envoyée avec succès.";
    } else {
        echo "Erreur lors de l'enregistrement du paiement.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Requête invalide.";
}
?>
