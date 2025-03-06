<?php
require_once 'auth-top-admin.php';
?>
<?php
include 'db.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Check if email already exists
    $stmt = $conn->prepare("SELECT COUNT(*) FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($emailExists);
    $stmt->fetch();
    $stmt->close();

    if ($emailExists) {
        echo json_encode(["status" => "error", "message" => "Cet email est déjà utilisé."]);
        exit();
    }

    // Insert new admin
    $stmt = $conn->prepare("INSERT INTO user (nom, email, password, role, id_client) VALUES (?, ?, ?, 'admin', NULL)");
    $stmt->bind_param("sss", $nom, $email, $hashedPassword);
    
    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Administrateur ajouté avec succès."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Erreur lors de l'ajout de l'administrateur."]);
    }

    $stmt->close();
}
?>
