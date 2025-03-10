<?php
require_once 'auth-user.php';
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
                                <a href="../main/user-profile.php" class="text-nowrap logo-img">
                                    <img src="../assets/images/logos/loanislam.png" alt="Logo" height="35" />
                                </a>

                            </div>
                            <!-- ---------------------------------- -->
                            <!-- Dashboard -->
                            <!-- ---------------------------------- -->
                            <?php include "user-sidebar.php" ?>

                            <!-- ---------------------------------- -->

                        </div>
                    </div>
                </div>
            </aside>
            <!--  Sidebar End -->
            <div class="page-wrapper">
                <!--  Header Start -->
                <?php include "user-header.php" ?>
                <!--  Header End -->

            <div class="body-wrapper">
                <div class="container-fluid">
                    <div class="row">



                        <!-- Start admins table -->
                        <?php
                        include 'db.php'; // Ensure this connects to your database

                        // Fetch administrators from the database
                        // $sql = "SELECT id, nom, email, password FROM user WHERE role = 'client'";
                        // $result = $conn->query($sql);

                        $sql = "SELECT id, nom, email, password FROM user WHERE id_client = $client_id";
                        $result = $conn->query($sql);
                        ?>


                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex mb-2 align-items-center">
                                    <div>
                                        <h5>Vos informations</h5>
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
                                                                <form action='update_user.php' method='POST'>
                                                                    <input type='hidden' name='id' value='" . $row['id'] . "'> <!-- Hidden input for ID -->
                                                                    <button type='submit' class='btn btn-success'>Editer</button>
                                                                </form>
                                                                
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
                                    .catch(error => console.error("Erreur lors de la récupération des utilisateurs:", error));
                            }

                            // Fetch administrators when the page loads
                            document.addEventListener("DOMContentLoaded", fetchAdmins);
                        </script>

                        <!-- End admins table-->
                       

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