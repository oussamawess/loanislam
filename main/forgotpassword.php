<?php
session_start();
require 'db.php'; // Include your database connection file
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $conn->real_escape_string($_POST['email']);

    // Check if the email exists in the database using prepared statement
    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Generate a unique token
        $token = bin2hex(random_bytes(50));
        $expires_at = date('Y-m-d H:i:s', strtotime('+1 hour')); // Token expires in 1 hour

        // Insert the token into the password_resets table using prepared statement
        $sql = "INSERT INTO password_resets (email, token, expires_at) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $email, $token, $expires_at);

        if ($stmt->execute()) {
            // Send the reset link to the user's email using PHPMailer
            $mail = new PHPMailer(true);

            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host       = 'ssl0.ovh.net'; // Replace with your SMTP server
                $mail->SMTPAuth   = true;
                $mail->Username   = 'Oussama@digietab.tn'; // Replace with your email
                $mail->Password   = 'digietab@2024@';   // Replace with your email password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use TLS encryption
                $mail->Port       = 587; // Use Port 587 for STARTTLS

                // Recipients
                $mail->setFrom('Oussama@digietab.tn', 'Loan Islam'); // Replace with your email and name
                $mail->addAddress($email); // Add a recipient

                // Content
                $reset_link = "http://localhost/Loan_Islam_App/main/resetpassword.php?token=$token";
                $mail->CharSet = 'UTF-8'; // Explicitly set charset to UTF-8
                $mail->isHTML(true);
                $mail->Subject = 'Réinitialisation du mot de passe';
                $mail->Body    = "Cliquez sur le lien suivant pour réinitialiser votre mot de passe : <a href='$reset_link'>$reset_link</a>";

                $mail->send();
                $_SESSION['message'] = "Un lien de reinitialisation de mot de passe a été envoyé à votre adresse e-mail.";
            } catch (Exception $e) {
                $_SESSION['error'] = "Erreur lors de l'envoi de l'email: {$mail->ErrorInfo}";
            }
        } else {
            $_SESSION['error'] = "Error generating reset token.";
        }
    } else {
        $_SESSION['error'] = "Email non trouvé.";
    }
    header("Location: forgotpassword.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <!-- <link rel="shortcut icon" type="image/png" href="../assets/images/logos/loanislam.png" width="16" height="auto" /> -->

  <link rel="icon" type="image/png" href="../assets/images/logos/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="../assets/images/logos/favicon.svg" />
  <link rel="shortcut icon" href="../assets/images/logos/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/logos/apple-touch-icon.png" />
  <link rel="manifest" href="../assets/images/logos/site.webmanifest" />

  <!-- Core Css -->
  <link rel="stylesheet" href="../assets/css/styles.css" />

  <title>Loanislam</title>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="../assets/images/logos/loanislam.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    <div class="position-relative overflow-hidden auth-bg min-vh-100 w-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100 my-5 my-xl-0">
          <div class="col-md-6 d-flex flex-column justify-content-center">
            <div class="card mb-0 bg-body auth-login m-auto w-100">
              <div class="row gx-0">
                <!-- ------------------------------------------------- -->
                <!-- Part 1 -->
                <!-- ------------------------------------------------- -->
                <div class="col-xl-12">
                  <div class="row justify-content-center py-4">
                    <div class="col-lg-11">
                      <div class="card-body">
                        <a href="../tableau-de-bord.php" class="text-nowrap logo-img d-block mb-4 w-100">
                          <img src="../assets/images/logos/loanislam.png" width="200" class="dark-logo" alt="Logo-Dark" />
                        </a>
                        <p class="text-muted">Veuillez entrer l'adresse e-mail associée à votre compte et nous vous enverrons un lien pour réinitialiser votre mot de passe.</p>
                        <?php if (isset($_SESSION['message'])): ?>
                          <div class="alert alert-success"><?php echo $_SESSION['message'];
                                                            unset($_SESSION['message']); ?></div>
                        <?php endif; ?>
                        <?php if (isset($_SESSION['error'])): ?>
                          <div class="alert alert-danger"><?php echo $_SESSION['error'];
                                                          unset($_SESSION['error']); ?></div>
                        <?php endif; ?>
                        <form method="POST">
                          <div class="mb-3">
                            <label for="text-email" class="form-label">Adresse e-mail</label>
                            <input type="email" class="form-control" id="text-email" name="email" placeholder="Entrez votre adresse e-mail" required>
                          </div>
                          <button type="submit" class="btn btn-dark w-100 py-8 mb-4 rounded-1">Mot de passe oublié</button>
                          <a href="../main/login.php" class="btn bg-primary-subtle text-primary w-100 py-8 mb-4 rounded-1">Retour à la connexion</a>
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="dark-transparent sidebartoggler"></div>
  <!-- Import Js Files -->
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="../assets/js/theme/app.init.js"></script>
  <script src="../assets/js/theme/theme.js"></script>
  <script src="../assets/js/theme/app.min.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>