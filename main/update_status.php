<?php
require_once 'auth-admin.php';
?>

<?php
include 'db.php'; // Database connection

$response = ["status" => "error", "message" => "Opération échouée."];

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'], $_POST['statut'])) {
    $client_id = intval($_POST['id']);
    $statut = $_POST['statut'];

    // Update the client status
    $sql = "UPDATE client SET statut = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $statut, $client_id);

    if ($stmt->execute()) {
        $response = ["status" => "success", "message" => "Statut mis à jour avec succès."];
    } else {
        $response = ["status" => "error", "message" => "Erreur lors de la mise à jour."];
    }

    $stmt->close();
}

echo json_encode($response);
?>
