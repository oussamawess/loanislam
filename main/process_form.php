<?php
require_once 'db.php';

// Function to sanitize input data
function sanitize($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Function to handle file upload
function uploadFile($file) {
    if (isset($_FILES[$file]) && $_FILES[$file]['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'files/'; // Folder to store uploaded files
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true); // Create folder if it doesn't exist
        }

        $originalName = $_FILES[$file]['name'];
        $extension = pathinfo($originalName, PATHINFO_EXTENSION);
        $uniqueName = uniqid('file_', true) . '.' . $extension; // Generate unique filename
        $uploadPath = $uploadDir . $uniqueName; // Full path to save the file

        if (move_uploaded_file($_FILES[$file]['tmp_name'], $uploadPath)) {
            return $uploadPath; // Return the saved file path
        }
    }
    return null; // Return null if upload fails
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Set response header to JSON
    header('Content-Type: application/json');

    // Retrieve user email for duplicate check
    $email_user = filter_var($_POST['mail_user'], FILTER_VALIDATE_EMAIL) ? $_POST['mail_user'] : null;

    // Check if email already exists in the user table
    $check_email_query = "SELECT email FROM user WHERE email = ?";
    $stmt_check = $conn->prepare($check_email_query);
    $stmt_check->bind_param("s", $email_user);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        // Email already exists
        echo json_encode(["status" => "error", "message" => "Cette adresse e-mail est déjà utilisée."]);
        $stmt_check->close();
        exit;
    }
    $stmt_check->close();

    // If email is unique, proceed with saving data
    try {
        // Start a transaction to ensure data consistency
        $conn->begin_transaction();

        // Client data
        $nom_client = sanitize($_POST['nom_client']);
        $prenom_client = sanitize($_POST['prenom_client']);
        $age_client = (int) $_POST['age_client'];
        $telephone_client = sanitize($_POST['telephone_client']);
        // $email_client = filter_var($_POST['email_client'], FILTER_VALIDATE_EMAIL) ? $_POST['email_client'] : null;
        $adresse_client = sanitize($_POST['adresse_client']);
        $profession_client = sanitize($_POST['profession_client']);
        $salaire_client = (float) str_replace('€', '', $_POST['salaire_client']);
        $statut_civil_client = sanitize($_POST['statut_civil_client']);
        $montant_souhaite = (float) str_replace('€', '', $_POST['montant']);
        $duree_remboursement = (int) str_replace(' mois', '', $_POST['duree']);
        $type_maison = sanitize($_POST['typeMaison']);
        $montant_total_du = (float) str_replace('€', '', $_POST['total']);
        $statut = "Nouvelles";
        $have_partner = isset($_POST['2person']) ? 1 : 0; // Convert boolean to integer

        // File uploads
        $fichier_paie_client = uploadFile('fichier_paie_client');
        $attestation_salaire_client = uploadFile('attestation_salaire_client');
        $extrait_bancaire_client = uploadFile('extrait_salaire_client');
        $contrat_client = uploadFile('contrat_client');

        // Insert client data
        $stmt = $conn->prepare("INSERT INTO client (nom, prenom, age, telephone, email, adress, profession, salaire_brut, statut_civil, montant_souhaite, duree_remboursement, type_maison, montant_total_du, statut, have_partner, fichier_paie, attestation_salaire, extrait_bancaire, contrat) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssissssdsdissssssss", $nom_client, $prenom_client, $age_client, $telephone_client, $email_user, $adresse_client, $profession_client, $salaire_client, $statut_civil_client, $montant_souhaite, $duree_remboursement, $type_maison, $montant_total_du, $statut, $have_partner, $fichier_paie_client, $attestation_salaire_client, $extrait_bancaire_client, $contrat_client);

        if (!$stmt->execute()) {
            throw new Exception("Erreur lors de l'inscription du client.");
        }
        $client_id = $stmt->insert_id; // Get the last inserted client ID
        $stmt->close();

        // If the client has a partner, insert partner data
        if ($have_partner) {
            $nom_partner = sanitize($_POST['nom_partner']);
            $prenom_partner = sanitize($_POST['prenom_partner']);
            $age_partner = (int) $_POST['age_partner'];
            $telephone_partner = sanitize($_POST['telephone_partner']);
            $email_partner = filter_var($_POST['email_partner'], FILTER_VALIDATE_EMAIL) ? $_POST['email_partner'] : null;
            $adresse_partner = sanitize($_POST['adresse_partner']);
            $profession_partner = sanitize($_POST['profession_partner']);
            $salaire_partner = (float) str_replace('€', '', $_POST['salaire_partner']);
            $statut_civil_partner = sanitize($_POST['statut_civil_partner']);
            $montant_souhaite_partner = (float) str_replace('€', '', $_POST['montant1']);
            $duree_remboursement_partner = (int) str_replace(' mois', '', $_POST['duree1']);
            $type_maison_partner = sanitize($_POST['typeMaison1']);
            $montant_total_du_partner = (float) str_replace('€', '', $_POST['total1']);
            $statut_partner = "Nouvelles";

            // File uploads for partner
            $fichier_paie_partner = uploadFile('fichier_paie_partner');
            $attestation_salaire_partner = uploadFile('attestation_salaire_partner');
            $extrait_bancaire_partner = uploadFile('extrait_salaire_partner');
            $contrat_partner = uploadFile('contrat_partner');

            // Insert partner data
            $stmt = $conn->prepare("INSERT INTO partner (id_client, nom, prenom, age, telephone, email, adress, profession, salaire_brut, statut_civil, montant_souhaite, duree_remboursement, type_maison, montant_total_du, statut, fichier_paie, attestation_salaire, extrait_bancaire, contrat) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ississssdsdisssssss", $client_id, $nom_partner, $prenom_partner, $age_partner, $telephone_partner, $email_partner, $adresse_partner, $profession_partner, $salaire_partner, $statut_civil_partner, $montant_souhaite_partner, $duree_remboursement_partner, $type_maison_partner, $montant_total_du_partner, $statut_partner, $fichier_paie_partner, $attestation_salaire_partner, $extrait_bancaire_partner, $contrat_partner);
            if (!$stmt->execute()) {
                throw new Exception("Erreur lors de l'inscription du partenaire.");
            }
            $stmt->close();
        }

        // Insert user data
        $nom_user = sanitize($_POST['nom_client']) . ' ' . sanitize($_POST['prenom_client']);
        $password_user = password_hash($_POST['password_user'], PASSWORD_DEFAULT); // Secure password
        $role = "client"; // Default role

        $stmt = $conn->prepare("INSERT INTO user (id_client, nom, email, password, role) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("issss", $client_id, $nom_user, $email_user, $password_user, $role);
        if (!$stmt->execute()) {
            throw new Exception("Erreur lors de l'inscription de l'utilisateur.");
        }
        $stmt->close();

        // Commit the transaction if everything is successful
        $conn->commit();

        // Success response
        echo json_encode(["status" => "success", "message" => "Inscription réussie !"]);
    } catch (Exception $e) {
        // Roll back the transaction if any error occurs
        $conn->rollback();

        // Error response
        echo json_encode(["status" => "error", "message" => $e->getMessage()]);
    }
} else {
    // Invalid request method
    echo json_encode(["status" => "error", "message" => "Méthode de requête invalide."]);
}
?>