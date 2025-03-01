<?php
session_start();
require_once 'db.php'; // Database connection

// Check if the user is logged in and is a client
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'client') {
    // Redirect to login page if the user is not a client
    header('Location: login.php');
    exit();
}

// Retrieve client ID from session
$client_id = $_SESSION['client_id'];

// Fetch additional data for the client
$sql = "SELECT * FROM user WHERE id_client = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $client_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $client = $result->fetch_assoc();

    // You can now display the client's dashboard with their data
    // echo "<h1>Welcome, " . htmlspecialchars($client['name']) . "</h1>";
} else {
    echo "<p class='alert alert-danger'>Aucun client trouvé.</p>";
    exit();
}
?>