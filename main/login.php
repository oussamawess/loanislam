<?php
session_start();
require_once 'db.php'; // Database connection

$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve login details
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sanitize input
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = trim($password);

    // Query to get user data by email
    $sql = "SELECT id, id_client, email, password, role FROM user WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch user data
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            // Password is correct, set session variables
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_role'] = $user['role'];

            if ($user['role'] == 'admin' || $user['role'] == 'topadmin') {
                $_SESSION['admin_id'] = $user['id']; // Store admin's ID in the session
                // Redirect to the admin dashboard
                header('Location: tableau-de-bord.php');
            } else {
                $_SESSION['client_id'] = $user['id_client']; // Store client's ID in the session
                // Redirect to the client dashboard
                header('Location: user-profile.php');
            }
            exit(); // Ensure to stop further script execution
        } else {
            // Incorrect password
            $error_message = "<p class='alert alert-danger text-danger'>Mot de passe incorrect.</p>";
        }
    } else {
        // User not found
        $error_message = "<p class='alert alert-danger text-danger'>Utilisateur non trouvé.</p>";
    }

    $stmt->close();
    $conn->close();
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
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="../assets/css/styles.css" />

  <title>MatDash Bootstrap Admin</title>
</head>

<body>
  <!-- Preloader -->
  <!-- <div class="preloader">
    <img src="../assets/images/logos/loanislam.png" alt="loader" class="lds-ripple img-fluid" />
  </div> -->
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
                        <a href="../main/tableau-de-bord.php" class="text-nowrap logo-img d-block mb-4 w-100">
                          <img src="../assets/images/logos/loanislam.png" width="200" class="dark-logo" alt="Logo-Dark" />
                        </a>
                        <h4 class="lh-base mb-4">Connectez-vous</h4>

                        <form method="POST" action="login.php">
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Entrez votre adresse e-mail" required>
                          </div>
                          <div class="mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                              <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                              <a class="text-primary link-dark fs-2" href="../main/forgotpassword.html">Mot de passe oublié ?</a>
                            </div>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe" required>
                             <!-- Display the error message here -->
                             <?php if ($error_message): ?>
                                <div class="mt-3"><?php echo $error_message; ?></div>
                            <?php endif; ?>
                          </div>

                          <button type="submit" class="btn btn-dark w-100 py-8 mb-4 rounded-1">Se connecter</button>
                          <div class="d-flex align-items-center">
                            <p class="fs-12 mb-0 fw-medium">Vous n'avez pas encore de compte ?</p>
                            <a class="text-primary fw-bolder ms-2" href="../main/signup.html">Inscrivez-vous maintenant</a>
                          </div>
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