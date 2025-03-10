<?php
include 'db.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client_id = intval($_POST['client_id']);
    $documentLabel = trim($_POST['documentLabel']);

    if (!empty($client_id) && !empty($documentLabel)) {
        $sql = "INSERT INTO required_documents (id_client, label, status, has_been_read) VALUES (?, ?, 'pending', 0)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $client_id, $documentLabel);

        if ($stmt->execute()) {
            echo "Document ajouté avec succès!";
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Tous les champs sont obligatoires!";
    }
}
?>
