<?php
session_start();
require 'db.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['token'])) {
    $token = $conn->real_escape_string($_GET['token']);

    // Check if the token is valid and not expired
    $sql = "SELECT * FROM password_resets WHERE token = '$token' AND expires_at > NOW()";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        $_SESSION['error'] = "Invalid or expired token.";
        header("Location: forgotpassword.php");
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $token = $conn->real_escape_string($_POST['token']);
    $password = $conn->real_escape_string($_POST['password']);
    $confirm_password = $conn->real_escape_string($_POST['confirm_password']);

    if ($password !== $confirm_password) {
        $_SESSION['error'] = "Passwords do not match.";
        header("Location: resetpassword.php?token=$token");
        exit();
    }

    // Check if the token is still valid
    $sql = "SELECT * FROM password_resets WHERE token = '$token' AND expires_at > NOW()";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $reset_request = $result->fetch_assoc();

        // Update the user's password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $email = $reset_request['email'];
        $sql = "UPDATE user SET password = '$hashed_password' WHERE email = '$email'";
        if ($conn->query($sql)) {
            // Delete the reset token
            $sql = "DELETE FROM password_resets WHERE token = '$token'";
            $conn->query($sql);

            $_SESSION['message'] = "Your password has been reset successfully.";
            header("Location: ../main/login.php");
            exit();
        } else {
            $_SESSION['error'] = "Error updating password.";
            header("Location: resetpassword.php?token=$token");
            exit();
        }
    } else {
        $_SESSION['error'] = "Invalid or expired token.";
        header("Location: forgotpassword.php");
        exit();
    }
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
                                                <a href="login.php" class="text-nowrap logo-img d-block mb-4 w-100">
                                                    <img src="../assets/images/logos/loanislam.png" width="200" class="dark-logo" alt="Logo-Dark" />
                                                </a>
                                                <?php if (isset($_SESSION['error'])): ?>
                                                    <div class="alert alert-danger"><?php echo $_SESSION['error'];
                                                                                    unset($_SESSION['error']); ?></div>
                                                <?php endif; ?>
                                                <form method="POST" onsubmit="return validatePassword()">
                                                    <input type="hidden" name="token" value="<?php echo $token; ?>">

                                                    <div class="mb-3">
                                                        <label for="password" class="form-label">Nouveau mot de passe</label>
                                                        <input type="password" class="form-control" id="password" name="password" required>
                                                        <small id="password-error" class="text-danger" style="display: none;">Le mot de passe doit comporter au moins 8 caractères.</small>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="confirm_password" class="form-label">Confirmer le nouveau mot de passe</label>
                                                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                                                    </div>

                                                    <button type="submit" class="btn btn-dark w-100 py-8 mb-4 rounded-1">Réinitialiser le mot de passe</button>
                                                </form>

                                                <script>
                                                    function validatePassword() {
                                                        var password = document.getElementById("password").value;
                                                        var errorMessage = document.getElementById("password-error");

                                                        if (password.length < 8) {
                                                            errorMessage.style.display = "block";
                                                            return false; // Prevent form submission
                                                        } else {
                                                            errorMessage.style.display = "none";
                                                            return true;
                                                        }
                                                    }
                                                </script>


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