<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = intval($_POST['id']);
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    // Check if the password and repassword match
    if ($password !== $repassword) {
        echo json_encode(["status" => "error", "message" => "Les mots de passe ne correspondent pas."]);
        exit;
    }

    // Check if the email is already used by another user
    $sql_check_email = "SELECT id FROM user WHERE email = ? AND id != ?";
    $stmt_check_email = $conn->prepare($sql_check_email);
    $stmt_check_email->bind_param("si", $email, $id);
    $stmt_check_email->execute();
    $stmt_check_email->store_result();

    if ($stmt_check_email->num_rows > 0) {
        echo json_encode(["status" => "error", "message" => "Cet email est déjà utilisé par un autre utilisateur."]);
        $stmt_check_email->close();
        exit;
    }

    // Hash the password before passing it
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Update user data in the database
    $sql = "UPDATE user SET nom = ?, email = ?, password = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $nom, $email, $hashedPassword, $id);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Utilisateur mis à jour avec succès"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Erreur lors de la mise à jour"]);
    }

    $stmt->close();
    $conn->close();
}
?>
