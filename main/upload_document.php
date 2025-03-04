<?php
require_once 'db.php';
require_once 'auth-user.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["file"])) {
    $document_id = intval($_POST["document_id"]);

    // Ensure the document belongs to the logged-in client
    $stmt = $conn->prepare("SELECT id FROM required_documents WHERE id = ? AND id_client = ?");
    $stmt->bind_param("ii", $document_id, $client_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 0) {
        die("Unauthorized access.");
    }

    // File upload handling
    $upload_dir = "files/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $file_ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
    $unique_name = uniqid("doc_", true) . "." . $file_ext;
    $file_path = $upload_dir . $unique_name;

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $file_path)) {
        // Update the database with file path, status, and uploaded_at timestamp
        $update_query = "UPDATE required_documents SET file_path = ?, status = 'uploaded', has_been_read_admin = 0, updated_at = NOW() WHERE id = ?";
        $stmt = $conn->prepare($update_query);
        $stmt->bind_param("si", $file_path, $document_id);
        
        if ($stmt->execute()) {
            header("Location: user-profile.php"); // Redirect after success
            exit();
        } else {
            echo "Database update failed.";
        }
    } else {
        echo "File upload failed.";
    }
} else {
    echo "Invalid request.";
}
?>
