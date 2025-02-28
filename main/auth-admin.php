<?php
session_start();
require_once 'db.php'; // Database connection

// Check if the user is logged in and is an admin
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
  // Redirect to login page if the user is not an admin
  header('Location: login.php');
  exit();
}

// Retrieve admin ID from session
$admin_id = $_SESSION['admin_id'];

// Fetch additional data for the admin
$sql = "SELECT * FROM user WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $admin_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  $admin = $result->fetch_assoc();
  // You can now display the admin's dashboard with their data
  // echo "<h1>Welcome, " . htmlspecialchars($admin['nom']) . "</h1>";
} else {
  echo "<p class='alert alert-danger'>Aucun administrateur trouvé.</p>";
  exit();
}
?>