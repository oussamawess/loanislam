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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

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
            <!-- Dashboard -->
            <?php include "sidebar.php" ?>
          </div>
        </div>
      </div>
    </aside>
    <!--  Sidebar End -->
    <div class="page-wrapper">
      <!--  Header Start -->
      <?php include "header.php" ?>
      <!--  Header End -->
            <div class="body-wrapper">
                <div class="container-fluid">
                    <div class="row">


                        <!-- start fees table -->

                        <div class="card">
                            <style>
                                /* Message container */
                                #message {
                                    position: fixed;
                                    top: 20px;
                                    right: 20px;
                                    padding: 15px 20px;
                                    border-radius: 5px;
                                    font-size: 16px;
                                    font-weight: bold;
                                    color: white;
                                    opacity: 0;
                                    transform: translateX(100%);
                                    transition: opacity 0.5s ease, transform 0.5s ease;
                                    z-index: 1000;
                                }

                                /* Success message style */
                                #message.success {
                                    background-color: #4CAF50;
                                    /* Green */
                                    opacity: 1;
                                    transform: translateX(0);
                                }

                                /* Error message style */
                                #message.error {
                                    background-color: #F44336;
                                    /* Red */
                                    opacity: 1;
                                    transform: translateX(0);
                                }

                                /* Animation to hide the message after 3 seconds */
                                @keyframes fadeOut {
                                    from {
                                        opacity: 1;
                                        transform: translateX(0);
                                    }

                                    to {
                                        opacity: 0;
                                        transform: translateX(100%);
                                    }
                                }

                                .hide-message {
                                    animation: fadeOut 0.5s ease forwards;
                                }
                            </style>
                            <div class="card-body">
                                <div class="d-flex mb-2 align-items-center">
                                    <div>
                                        <h5>Frais de dossier</h5>
                                    </div>
                                </div>
                                <div class="table-responsive border rounded-1">
                                    <table class="table text-nowrap customize-table mb-0 align-middle">
                                        <thead class="text-dark fs-4">
                                            <tr>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Tarifs actuels</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Nouveaux frais</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Action</h6>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td id="current-fees" class="text-dark fw-bold">Loading...</td>
                                                <td><input class="form-control" type="number" id="new-fees" step="0.01" placeholder="saisir de nouveaux frais"></td>
                                                <td><button id="update-fees-btn" class="btn btn-success">Editer</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p id="message"></p>

                                    <script>
                                        $(document).ready(function() {
                                            // Fetch and display the current fees
                                            function fetchCurrentFees() {
                                                $.ajax({
                                                    url: 'fetch_fees.php',
                                                    type: 'GET',
                                                    dataType: 'json',
                                                    success: function(response) {
                                                        if (response.status === "success") {
                                                            $('#current-fees').text(response.fees+' €');
                                                        } else {
                                                            $('#current-fees').text("Error loading fees.");
                                                        }
                                                    },
                                                    error: function() {
                                                        $('#current-fees').text("Error loading fees.");
                                                    }
                                                });
                                            }

                                            // Fetch fees on page load
                                            fetchCurrentFees();

                                            // Handle update button click
                                            $('#update-fees-btn').on('click', function() {
                                                const newFees = $('#new-fees').val();

                                                if (!newFees || isNaN(newFees)) {
                                                    showMessage("Veuillez entrer un numéro valide.", "error");
                                                    return;
                                                }

                                                $.ajax({
                                                    url: 'update_fees.php',
                                                    type: 'POST',
                                                    data: {
                                                        fees: newFees
                                                    },
                                                    dataType: 'json',
                                                    success: function(response) {
                                                        if (response.status === "success") {
                                                            showMessage(response.message, "success");
                                                            fetchCurrentFees(); // Refresh the current fees
                                                        } else {
                                                            showMessage(response.message, "error");
                                                        }
                                                    },
                                                    error: function() {
                                                        showMessage("Une erreur s'est produite. Veuillez réessayer.", "error");
                                                    }
                                                });
                                            });

                                            // Function to show and hide messages
                                            function showMessage(message, type) {
                                                const messageElement = $('#message');
                                                messageElement.text(message).removeClass("success error hide-message").addClass(type);

                                                // Show the message
                                                setTimeout(() => {
                                                    messageElement.addClass("hide-message");
                                                }, 3000); // Hide after 3 seconds
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!-- end fees table -->


                        <!-- Start admins table -->
                        <?php
                        include 'db.php'; // Ensure this connects to your database

                        // Fetch administrators from the database
                        $sql = "SELECT id, nom, email, password FROM user WHERE role = 'admin'";
                        $result = $conn->query($sql);
                        ?>

                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex mb-2 align-items-center">
                                    <div>
                                        <h5>Liste des administrateurs</h5>
                                    </div>
                                </div>
                                <div class="table-responsive border rounded-1">
                                    <table class="table text-nowrap customize-table mb-0 align-middle">
                                        <thead class="text-dark fs-4">
                                            <tr>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Nom</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Adresse email</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Mot de passe</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Action</h6>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<tr>
                                                            <td><p class='mb-0 fw-normal fs-4 text-dark'>{$row['nom']}</p></td>
                                                            <td><p class='mb-0 fw-normal fs-4 text-dark'>{$row['email']}</p></td>
                                                            <td><p class='mb-0 fw-normal fs-4 text-dark'>********</p></td>

                                                            <td>
                                                                <a href='update_admins.php?id={$row['id']}' class='text-white text-decoration-none'><button class='btn btn-success'>Editer</button></a>
                                                                <button class='btn btn-danger delete-btn' data-id='{$row['id']}'>Supprimer</button>
                                                            </td>
                                                        </tr>";
                                                }
                                            } else {
                                                echo "<tr><td colspan='4' class='text-center'>Aucun administrateur trouvé.</td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- DELETE ADMIN script START-->
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                document.querySelectorAll(".delete-btn").forEach(button => {
                                    button.addEventListener("click", function() {
                                        let userId = this.getAttribute("data-id");

                                        if (confirm("Voulez-vous vraiment supprimer cet administrateur?")) {
                                            fetch("delete_admin.php", {
                                                    method: "POST",
                                                    headers: {
                                                        "Content-Type": "application/x-www-form-urlencoded"
                                                    },
                                                    body: "id=" + userId
                                                })
                                                .then(response => response.json())
                                                .then(data => {
                                                    if (data.status === "success") {

                                                        location.reload(); // Refresh the page
                                                    } else {
                                                        alert("Erreur: " + data.message);
                                                    }
                                                })
                                                .catch(error => console.error("Erreur:", error));
                                        }
                                    });
                                });
                            });
                        </script>
                        <!-- DELETE ADMIN script END-->

                        <script>
                            function fetchAdmins() {
                                fetch('fetch_admins.php')
                                    .then(response => response.json())
                                    .then(data => {
                                        let tableBody = document.getElementById("adminTableBody");
                                        tableBody.innerHTML = ""; // Clear existing data

                                        data.forEach(admin => {
                                            let row = `
                        <tr>
                            <td><p class="mb-0 fw-normal fs-4 text-dark">${admin.nom}</p></td>
                            <td><p class="mb-0 fw-normal fs-4 text-dark">${admin.email}</p></td>
                            <td><p class="mb-0 fw-normal fs-4 text-dark">${admin.password}</p></td>
                            <td>
                                <button class="btn btn-success">Editer</button>
                                <button class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>`;
                                            tableBody.innerHTML += row;
                                        });
                                    })
                                    .catch(error => console.error("Erreur lors de la récupération des administrateurs:", error));
                            }

                            // Fetch administrators when the page loads
                            document.addEventListener("DOMContentLoaded", fetchAdmins);
                        </script>

                        <!-- End admins table-->
                        <!--Start add admin -->
                        <!-- Add the Font Awesome library for eye icons -->
                        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Ajouter un administrateur</h4>
                                <div id="errorMessage" class="alert alert-danger text-danger fs-4" style="display: none;"></div>

                                <form id="adminForm" method="POST" action="add_admin.php" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="tb-fname" name="nom"
                                                    placeholder="Enter Name here" required>
                                                <label for="tb-fname">Nom</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="tb-email" name="email"
                                                    placeholder="name@example.com" required>
                                                <label for="tb-email">Adresse email</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="tb-pwd" name="password" placeholder="Password" required>
        <label for="tb-pwd">Mot de passe</label>
        <i id="togglePwd" class="fas fa-eye-slash"
           style="position: absolute; right: 10px; top: 10px; cursor: pointer;"></i>
        <small id="lengthError" class="form-text text-danger" style="display: none;">
            Le mot de passe doit contenir au moins 8 caractères.
        </small>
    </div>
</div>

<div class="col-md-6">
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="tb-cpwd" name="repassword" placeholder="Confirm Password" required>
        <label for="tb-cpwd">Confirmer le mot de passe</label>
        <i id="toggleCpwd" class="fas fa-eye-slash"
           style="position: absolute; right: 10px; top: 10px; cursor: pointer;"></i>
        <small id="passwordError" class="form-text text-danger" style="display: none;">
            Les mots de passe ne correspondent pas.
        </small>
    </div>
</div>

<div class="col-12">
    <div class="d-md-flex align-items-center">
        <div class="ms-auto mt-3 mt-md-0">
            <button type="submit" class="btn btn-primary hstack gap-6" id="submitBtn">Ajouter</button>
        </div>
    </div>
</div>

<script>
document.getElementById("submitBtn").addEventListener("click", function(event) {
    let password = document.getElementById("tb-pwd").value;
    let confirmPassword = document.getElementById("tb-cpwd").value;
    let lengthError = document.getElementById("lengthError");
    let passwordError = document.getElementById("passwordError");

    // Check password length
    if (password.length < 8) {
        event.preventDefault();
        lengthError.style.display = "block";
    } else {
        lengthError.style.display = "none";
    }

    // Check if passwords match
    if (password !== confirmPassword) {
        event.preventDefault();
        passwordError.style.display = "block";
    } else {
        passwordError.style.display = "none";
    }
});

// Toggle password visibility
document.getElementById("togglePwd").addEventListener("click", function() {
    let passwordInput = document.getElementById("tb-pwd");
    this.classList.toggle("fa-eye");
    this.classList.toggle("fa-eye-slash");
    passwordInput.type = passwordInput.type === "password" ? "text" : "password";
});

document.getElementById("toggleCpwd").addEventListener("click", function() {
    let confirmPasswordInput = document.getElementById("tb-cpwd");
    this.classList.toggle("fa-eye");
    this.classList.toggle("fa-eye-slash");
    confirmPasswordInput.type = confirmPasswordInput.type === "password" ? "text" : "password";
});
</script>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <script>
                            document.getElementById("adminForm").addEventListener("submit", function(event) {
                                event.preventDefault();

                                var formData = new FormData(this);

                                fetch("add_admin.php", {
                                        method: "POST",
                                        body: formData
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.status === "success") {
                                            document.getElementById("adminForm").reset();
                                            window.location.href = "parametres.php";
                                        } else {
                                            var errorMessageDiv = document.getElementById("errorMessage");
                                            errorMessageDiv.innerHTML = data.message;
                                            errorMessageDiv.style.display = "block";
                                        }
                                    })
                                    .catch(error => console.error("Erreur:", error));
                            });
                        </script>

                        <!-- <script>
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
                        </script> -->

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