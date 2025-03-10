<?php
require_once 'auth-user.php';
?>
<?php
require_once 'db.php'; // Database connection

// Check if the user is logged in and is a client
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'client') {
    header('Location: login.php');
    exit();
}

// Retrieve client ID from session
$client_id = $_SESSION['client_id'];

// Update the has_been_read column for this client
$update_sql = "UPDATE required_documents SET has_been_read = 1 WHERE id_client = ? AND has_been_read = 0";
$update_stmt = $conn->prepare($update_sql);
$update_stmt->bind_param("i", $client_id);
$update_stmt->execute();
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



                        <!-- Start Notifications -->

                        <div class="card overflow-hidden invoice-application">
                            <div class="d-flex align-items-center justify-content-between gap-6 m-3 d-lg-none">
                                <button class="btn btn-primary d-flex" type="button" data-bs-toggle="offcanvas" data-bs-target="#chat-sidebar" aria-controls="chat-sidebar">
                                    <i class="ti ti-menu-2 fs-5"></i>
                                </button>
                                <form class="position-relative w-100">
                                    <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search Contact">
                                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                                </form>
                            </div>

                            <?php
                            require_once 'db.php'; // Ensure database connection
                            require_once 'auth-user.php'; // Ensure authentication

                            $query = "SELECT id, label, status, created_at FROM required_documents WHERE id_client = ? ORDER BY created_at DESC";
                            $stmt = $conn->prepare($query);
                            $stmt->bind_param("i", $client_id);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            $documents = [];
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $documents[] = $row;
                                }
                            }
                            $stmt->close();
                            ?>


                            <div class="d-flex">
                                <!-- Left Side: User List -->
                                <div class="w-25 d-none d-lg-block border-end user-chat-box">
                                    <div class="p-3 border-bottom">
                                        <form class="position-relative">
                                            <input type="search" class="form-control search-invoice ps-5" id="text-srh" placeholder="Chercher">
                                            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                                        </form>
                                    </div>
                                    <div class="app-invoice">
                                        <ul class="overflow-auto invoice-users simplebar-scrollable-y" data-simplebar="init">
                                            <div class="simplebar-content">
                                                <?php foreach ($documents as $doc) : ?>
                                                    <li>
                                                        <a href="javascript:void(0)" class="p-3 bg-hover-light-black border-bottom d-flex align-items-start invoice-user listing-user bg-light-subtle"
                                                            data-invoice-id="<?= $doc['id']; ?>">
                                                            <div class="btn btn-primary round rounded-circle d-flex align-items-center justify-content-center">
                                                                <i class="ti ti-user fs-6"></i>
                                                            </div>
                                                            <div class="ms-3 d-inline-block w-75">
                                                                <h6 class="mb-0 invoice-customer"><?= htmlspecialchars($doc['label']); ?></h6>
                                                                <!-- <span class="fs-3 invoice-id text-truncate text-body-color d-block w-85">Id: #<!?= $doc['id']; ?></span> -->
                                                                <span class="fs-3 invoice-date text-nowrap text-body-color d-block"><?= $doc['created_at']; ?></span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </div>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Right Side: Notifications Content -->
                                <div class="w-75 w-xs-100 chat-container">
                                    <div class="invoice-inner-part h-100">
                                        <div class="invoiceing-box">
                                            <div class="invoice-header d-flex align-items-center border-bottom p-3">
                                                <h4 class="text-uppercase mb-0">Notifications</h4>
                                            </div>
                                            <div class="p-3" id="custom-invoice">
                                                <?php foreach ($documents as $doc) : ?>
                                                    <div class="invoice-details invoice-<?= $doc['id']; ?>" style="display: none;">
                                                        <div class="row pt-3">
                                                            <div class="col-md-12">
                                                                <div>
                                                                    <address>
                                                                        <h6>&nbsp;<?= htmlspecialchars($doc['label']); ?></h6>
                                                                        <h6 class="fw-bold">&nbsp; Demande envoyée le : <?= $doc['created_at']; ?></h6>
                                                                    </address>
                                                                </div>
                                                                <div class="text-end">
                                                                    <form action="upload_document.php" method="POST" enctype="multipart/form-data">
                                                                        <input type="hidden" name="document_id" value="<?= $doc['id']; ?>">
                                                                        <?php if ($doc['status'] == "uploaded"){
                                                                            echo "<input class='form-control' name='file' type='file' disabled>";
                                                                        }else{
                                                                            echo "<input class='form-control' name='file' type='file' required>";
                                                                        }
                                                                        ?>

                                                                        <button type="submit" class="btn btn-success mt-2">Envoyer</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                <?php endforeach; ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="offcanvas offcanvas-start user-chat-box" tabindex="-1" id="chat-sidebar" aria-labelledby="offcanvasExampleLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Notifications</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <form class="position-relative">
                                            <input type="search" class="form-control search-invoice ps-5" id="text-srh" placeholder="Chercher">
                                            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                                        </form>
                                    </div>
                                    <div class="app-invoice overflow-auto">
                                        <ul class="invoice-users">
                                            <?php foreach ($documents as $doc) : ?>
                                                <li>
                                                    <a href="javascript:void(0)" class="p-3 bg-hover-light-black border-bottom d-flex align-items-start invoice-user listing-user bg-light-subtle"
                                                        data-invoice-id="<?= $doc['id']; ?>">
                                                        <div class="btn btn-primary round rounded-circle d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-user fs-6"></i>
                                                        </div>
                                                        <div class="ms-3 d-inline-block w-75">
                                                            <h6 class="mb-0 invoice-customer"><?= htmlspecialchars($doc['label']); ?></h6>
                                                            <span class="fs-3 invoice-date text-nowrap text-body-color d-block"><?= $doc['created_at']; ?></span>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                // Hide all notification details initially
                                let invoices = document.querySelectorAll(".invoice-details");
                                invoices.forEach(el => el.style.display = "none");

                                // Get all invoice list items
                                let invoiceItems = document.querySelectorAll(".invoice-user");

                                if (invoiceItems.length > 0) {
                                    // Show the newest (first) notification by default
                                    let firstInvoiceId = invoiceItems[0].getAttribute("data-invoice-id");
                                    let firstInvoice = document.querySelector(`.invoice-${firstInvoiceId}`);
                                    if (firstInvoice) {
                                        firstInvoice.style.display = "block";
                                    }

                                    // Add event listener to each document list item
                                    invoiceItems.forEach(item => {
                                        item.addEventListener("click", function() {
                                            // Hide all notifications
                                            invoices.forEach(el => el.style.display = "none");

                                            // Show the selected notification
                                            let invoiceId = this.getAttribute("data-invoice-id");
                                            let selectedInvoice = document.querySelector(`.invoice-${invoiceId}`);
                                            if (selectedInvoice) {
                                                selectedInvoice.style.display = "block";
                                            }
                                        });
                                    });
                                }
                            });
                        </script>



                        <!--End Notifications-->

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



    <!-- solar icons -->

    <script src="../assets/js/apps/invoice.js"></script>
    <script src="../assets/js/apps/jquery.PrintArea.js"></script>
</body>

</html>