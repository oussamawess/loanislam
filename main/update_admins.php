<?php
require_once 'auth-top-admin.php';
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
    <link rel="stylesheet" href="../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">


    <link rel="stylesheet" href="../assets/libs/prismjs/themes/prism-okaidia.min.css">

</head>

<body>
    <!-- Toast -->
    <!-- <div class="toast toast-onload align-items-center text-bg-primary border-0" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="toast-body hstack align-items-start gap-6">
            <i class="ti ti-alert-circle fs-6"></i>
            <div>
                <h5 class="text-white fs-3 mb-1">Welcome to MatDash</h5>
                <h6 class="text-white fs-2 mb-0">Easy to costomize the Template!!!</h6>
            </div>
            <button type="button" class="btn-close btn-close-white fs-2 m-0 ms-auto shadow-none" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div> -->
    <!-- Preloader -->
    <div class="preloader">
        <img src="../assets/images/logos/loanislam.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper">
        <!-- Sidebar Start -->
        <aside class="side-mini-panel with-vertical">
            <!-- ---------------------------------- -->
            <!-- Start Vertical Layout Sidebar -->
            <!-- ---------------------------------- -->
            <div class="iconbar">
                <div>
                    <div class="mini-nav">
                        <div class="brand-logo d-flex align-items-center justify-content-center">
                            <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                                <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-7"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class="sidebarmenu">
                        <div class="brand-logo d-flex align-items-center nav-logo">
                            <a href="../main/tableau-de-bord.php" class="text-nowrap logo-img">
                                <img src="../assets/images/logos/loanislam.png" alt="Logo" height="35" />
                            </a>
                        </div>
                        <!-- ---------------------------------- -->
                        <!-- Dashboard -->
                        <!-- ---------------------------------- -->
                        <nav class="sidebar-nav" id="menu-right-mini-1" data-simplebar>
                            <ul class="sidebar-menu" id="sidebarnav">
                                <!-- ---------------------------------- -->
                                <!-- Home -->
                                <!-- ---------------------------------- -->
                                <li class="nav-small-cap">
                                    <span class="hide-menu"></span>
                                </li>
                                <!-- ---------------------------------- -->
                                <!-- Dashboard -->
                                <!-- ---------------------------------- -->
                                <li class="sidebar-item" style="display: none;">
                                    <a class="sidebar-link" href="tableau-de-bord.php" id="get-url"
                                        aria-expanded="false">
                                        <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                                        <span class="hide-menu">Tableau de bord</span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="tableau-de-bord.php" id="get-url"
                                        aria-expanded="false">
                                        <iconify-icon icon="mage:dashboard-fill"></iconify-icon>
                                        <span class="hide-menu">Tableau de bord</span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="nouvelles-demandes.php" id="get-url"
                                        aria-expanded="false">
                                        <iconify-icon icon="solar:users-group-rounded-linear"></iconify-icon>
                                        <span class="hide-menu">Nouvelles demandes</span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="en-attente-detudes.php" id="get-url"
                                        aria-expanded="false">
                                        <iconify-icon icon="solar:calendar-linear"></iconify-icon>
                                        <span class="hide-menu">En attente d'études</span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="etude-en-cours.php" id="get-url"
                                        aria-expanded="false">
                                        <iconify-icon icon="solar:server-2-outline"></iconify-icon>
                                        <span class="hide-menu">Étude en cours</span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="en-attente-signature-contrat.php" id="get-url"
                                        aria-expanded="false">
                                        <iconify-icon icon="solar:chart-2-outline"></iconify-icon>
                                        <span class="hide-menu">En Attente signature<br> contrat</span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="contrat-signe.php" id="get-url"
                                        aria-expanded="false">
                                        <iconify-icon icon="mingcute:bubble-line" width="1.2em"
                                            height="1.2em"></iconify-icon>
                                        <span class="hide-menu">Contrat signé</span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="contrat-annule.php" id="get-url"
                                        aria-expanded="false">
                                        <iconify-icon icon="mynaui:credit-card-minus" width="1.2em"
                                            height="1.2em"></iconify-icon>
                                        <span class="hide-menu">Contrat annulé</span>
                                    </a>
                                </li>

                                <li>
                                    <span class="sidebar-divider"></span>
                                </li>

                                <?php
                                include 'db.php';

                                // Check if any document is unread
                                $query = "SELECT COUNT(*) as unread_count FROM required_documents WHERE has_been_read_admin = 0";
                                $result = $conn->query($query);
                                $row = $result->fetch_assoc();
                                $hasUnread = ($row['unread_count'] > 0);
                                ?>
                                <li class="sidebar-item">
                                <a class="sidebar-link" href="notifications.php" id="get-url" aria-expanded="false">
                                    <iconify-icon icon="cuida:notification-bell-outline"></iconify-icon>
                                    <span class="hide-menu">Notifications</span>

                                    <?php if ($hasUnread) : ?>
                                    <iconify-icon icon="material-symbols:notifications-unread-rounded" width="1.2em" height="1.2em" style="color: #e52727"></iconify-icon>
                                    <?php endif; ?>
                                </a>
                                </li>

                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="profil.tml" id="get-url" aria-expanded="false">
                                        <iconify-icon icon="gg:profile"></iconify-icon>
                                        <span class="hide-menu">Profil</span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="parametres.php" id="get-url" aria-expanded="false">
                                        <iconify-icon icon="solar:settings-outline"></iconify-icon>
                                        <span class="hide-menu">Paramètres</span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="javascript:void(0);" id="logout-link" aria-expanded="false">
                                        <iconify-icon icon="solar:logout-2-outline"></iconify-icon>
                                        <span class="hide-menu">Déconnexion</span>
                                    </a>
                                </li>
                                <script>
                                    // Add event listener to the logout link
                                    document.getElementById('logout-link').addEventListener('click', function() {
                                        // Make an AJAX request to logout.php to destroy the session
                                        fetch('logout.php')
                                            .then(response => response.text())
                                            .then(data => {
                                                // After the session is destroyed, redirect to the login page
                                                window.location.href = 'login.php'; // or the path to your login page
                                            })
                                            .catch(error => console.log('Error during logout:', error));
                                    });
                                </script>

                                <?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Get user ID from URL

    // Fetch user details from the database
    $sql = "SELECT id FROM user WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc(); // Store user data
    } else {
        echo "User not found.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}
?>
<!-- Corrected HTML with PHP embedded in href -->
<a style="display: none;" href="update_admins.php?id=<?php echo $user['id']; ?>" id="get-url" class="sidebar-link" aria-expanded="false"></a>

                                
                            </ul>
                        </nav>
                        

                        <!-- ---------------------------------- -->

                    </div>
                </div>
            </div>
        </aside>
        <!--  Sidebar End -->
        <div class="page-wrapper">
      <!--  Header Start -->
      <?php include "header.php" ?>
      <!--  Header End -->


            <?php
            include 'db.php';

            if (isset($_GET['id'])) {
                $id = intval($_GET['id']); // Get user ID from URL

                // Fetch user details from the database
                $sql = "SELECT id, nom, email, password FROM user WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $user = $result->fetch_assoc(); // Store user data
                } else {
                    echo "User not found.";
                    exit;
                }
            } else {
                echo "Invalid request.";
                exit;
            }
            ?>

            <div class="body-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <!--Start add admin -->
                        <!-- Add the Font Awesome library for eye icons -->
                        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Modifier un administrateur</h4>
                                <div id="errorMessage" class="alert alert-danger text-danger fs-4" style="display: none;"></div>

                                <form id="adminForm" method="POST" action="update_admins_process.php" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="tb-fname" name="nom" value="<?php echo $user['nom']; ?>" placeholder="Enter Name here" required>
                                                <label for="tb-fname">Nom</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="tb-email" name="email" value="<?php echo $user['email']; ?>" placeholder="name@example.com" required>
                                                <label for="tb-email">Adresse email</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="tb-pwd" name="password" placeholder="Password" required>
                                                <label for="tb-pwd">Nouveau mot de passe</label>
                                                <i id="togglePwd" class="fas fa-eye-slash" style="position: absolute; right: 10px; top: 10px; cursor: pointer;"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="tb-cpwd" name="repassword" placeholder="Confirm Password" required>
                                                <label for="tb-cpwd">Confirmer le nouveau mot de passe</label>
                                                <i id="toggleCpwd" class="fas fa-eye-slash" style="position: absolute; right: 10px; top: 10px; cursor: pointer;"></i>
                                                <small id="passwordError" class="form-text text-danger" style="display:none;">Les mots de passe ne correspondent pas. Veuillez les vérifier.</small>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-md-flex align-items-center">
                                                <div class="ms-auto mt-3 mt-md-0">
                                                    <button type="submit" class="btn btn-success hstack gap-6">Modifier</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                document.querySelector("#adminForm").addEventListener("submit", function(event) {
                                    event.preventDefault(); // Prevent form from submitting normally

                                    // Get form data
                                    var formData = new FormData(this);

                                    fetch('update_admins_process.php', {
                                            method: 'POST',
                                            body: formData
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            // Hide the error message initially
                                            document.getElementById("errorMessage").style.display = "none";

                                            if (data.status === "error") {
                                                // Show the error message if there's an error
                                                document.getElementById("errorMessage").innerHTML = data.message;
                                                document.getElementById("errorMessage").style.display = "block";
                                            } else {
                                                // Success message (you can show a success message or redirect)
                                                
                                                window.location.href = 'parametres.php'; 
                                            }
                                        })
                                        .catch(error => {
                                            console.error("Error:", error);
                                        });
                                });
                            });
                        </script>

                        <script>
                            // Toggle password visibility
                            function togglePasswordVisibility(inputId, iconId) {
                                var passwordInput = document.getElementById(inputId);
                                var icon = document.getElementById(iconId);

                                // Toggle the type of input and icon
                                if (passwordInput.type === "password") {
                                    passwordInput.type = "text";
                                    icon.classList.remove("fa-eye-slash");
                                    icon.classList.add("fa-eye");
                                } else {
                                    passwordInput.type = "password";
                                    icon.classList.remove("fa-eye");
                                    icon.classList.add("fa-eye-slash");
                                }
                            }

                            // Add event listeners for both password fields
                            document.getElementById("togglePwd").addEventListener("click", function() {
                                togglePasswordVisibility("tb-pwd", "togglePwd");
                            });
                            document.getElementById("toggleCpwd").addEventListener("click", function() {
                                togglePasswordVisibility("tb-cpwd", "toggleCpwd");
                            });

                            // Form validation on submit
                            document.getElementById("adminForm").addEventListener("submit", function(event) {
                                var password = document.getElementById("tb-pwd").value;
                                var confirmPassword = document.getElementById("tb-cpwd").value;
                                var errorMessage = document.getElementById("passwordError");

                                // Check if passwords match
                                if (password !== confirmPassword) {
                                    event.preventDefault(); // Prevent form submission
                                    errorMessage.style.display = "block"; // Show error message
                                } else {
                                    errorMessage.style.display = "none"; // Hide error message if passwords match
                                }
                            });
                        </script>

                        <!--End add admin-->

                        <div id="settlements" style="display: none;"></div>


                    </div>
                </div>
            </div>
            

            <script>
                function handleColorTheme(e) {
                    document.documentElement.setAttribute("data-color-theme", e);
                }
            </script>
        </div>

        <!--  Search Bar -->
        
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../assets/js/theme/app.init.js"></script>
    <script src="../assets/js/theme/theme.js"></script>
    <script src="../assets/js/theme/app.min.js"></script>
    <script src="../assets/js/theme/sidebarmenu.js"></script>

    <script src="../assets/js/vendor.min.js"></script>
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/js/dashboards/dashboard1.js"></script>
    <script src="../assets/libs/fullcalendar/index.global.min.js"></script>
</body>

</html>