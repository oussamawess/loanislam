<?php
require_once 'auth-admin.php';
?>
<?php
require_once 'db.php'; // Database connection

// Check if the user is logged in and is an admin
if (!isset($_SESSION['user_role']) || !in_array($_SESSION['user_role'], ['admin', 'topadmin'])) {
    // Redirect to login page if the user is not an admin
    header('Location: login.php');
    exit();
}

// Update all unread documents (NULL or 0) to 1
$update_sql = "UPDATE required_documents SET has_been_read_admin = 1 WHERE  has_been_read_admin = 0";
$update_stmt = $conn->prepare($update_sql);

if ($update_stmt->execute()) {
    // Optional: Debug message (remove in production)
    // echo "Records updated successfully";
} else {
    echo "Error updating records: " . $conn->error;
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
                            require_once 'auth-admin.php'; // Ensure authentication

                            // Modified query to join required_documents and client table and select the 'nom' field
                            $query = "
                                SELECT rd.id, rd.id_client, rd.label, rd.file_path, rd.status, rd.created_at, rd.updated_at, c.nom, c.statut AS client_status 
                                FROM required_documents rd
                                LEFT JOIN client c ON rd.id_client = c.id
                                WHERE rd.status = 'uploaded'
                                ORDER BY rd.updated_at DESC
                            ";

                            $stmt = $conn->prepare($query);
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
                                                                <h6 class="mb-0 invoice-customer"><?= htmlspecialchars($doc['nom']); ?>-<?= htmlspecialchars($doc['label']); ?></h6>
                                                                <!-- <span class="fs-3 invoice-id text-truncate text-body-color d-block w-85">Id: #<!?= $doc['id']; ?></span> -->
                                                                <span class="fs-3 invoice-date text-nowrap text-body-color d-block"><?= $doc['updated_at']; ?></span>
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
                                                                        <h6>&nbsp;Demande : <?= htmlspecialchars($doc['label']); ?></h6>
                                                                        <h6>&nbsp;Nom : <?= htmlspecialchars($doc['nom']); ?></h6>
                                                                        <h6>&nbsp;ID Client : <?= htmlspecialchars($doc['id_client']); ?></h6>
                                                                        <h6 class="fw-bold">&nbsp; Demande envoyée le <span class="text-success"><?= $doc['created_at']; ?></span></h6>
                                                                        <h6 class="fw-bold">&nbsp; Fichier téléchargé le <span class="text-primary"><?= $doc['updated_at']; ?></span></h6>
                                                                        <h6 class="fw-bold">&nbsp; Statut de demande <span class="text-primary"><?= $doc['client_status']; ?></span></h6>

                                                                        <!-- <h6 class="fw-bold">&nbsp; File: <!?= $doc['file_path']; ?></h6> -->
                                                                        <?php
                                                                        if ($doc['client_status'] == "En cours") {
                                                                            echo "<a href='consulter-etude-en-cours.php?id=" . htmlspecialchars($doc["id_client"]) . "' class='btn btn-info'>Consulter</a>";
                                                                        } else if ($doc['client_status'] == "En attente signature contrat") {
                                                                            echo "<a href='consulter-en-attente-signature-contrat.php?id=" . htmlspecialchars($doc["id_client"]) . "' class='btn btn-info'>Consulter</a>";
                                                                        } else {
                                                                            echo "<a href='consulter.php?id=" . htmlspecialchars($doc["id_client"]) . "' class='btn btn-info'>Consulter</a>";
                                                                        }
                                                                        ?>

                                                                        <!-- <td>
                                                                            <a href="consulter-etude-en-cours.php?id=<!?= htmlspecialchars($doc['id_client']); ?>" class='btn btn-info'>Consulter</a>
                                                                        </td> -->

                                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdfModal-<?= $doc['id']; ?>" data-pdf-path="<?= $doc['file_path']; ?>">
                                                                            Afficher PDF
                                                                        </button>
                                                                        <!-- Bootstrap Modal -->
                                                                        <div class="modal fade" id="pdfModal-<?= $doc['id']; ?>" tabindex="-1" aria-labelledby="pdfModalLabel-<?= $doc['id']; ?>" aria-hidden="true">
                                                                            <div class="modal-dialog modal-lg">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="pdfModalLabel-<?= $doc['id']; ?>">PDF Viewer</h5>
                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <!-- PDF Display -->
                                                                                        <iframe id="pdfViewer-<?= $doc['id']; ?>" src="" width="100%" height="400px" style="border: none;"></iframe>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <!-- Download Button -->
                                                                                        <a id="downloadPdf-<?= $doc['id']; ?>" href="" class="btn btn-success" download>
                                                                                            <i class="fas fa-download"></i> Télécharger PDF
                                                                                        </a>
                                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <script>
                                                                            // Add an event listener to the modal to set the PDF path
                                                                            document.getElementById('pdfModal-<?= $doc['id']; ?>').addEventListener('show.bs.modal', function(event) {
                                                                                // Get the button that triggered the modal
                                                                                const button = event.relatedTarget;

                                                                                // Get the PDF path from the data-pdf-path attribute
                                                                                const pdfPath = button.getAttribute('data-pdf-path');

                                                                                // Set the PDF path in the iframe and download link
                                                                                const pdfViewer = document.getElementById('pdfViewer-<?= $doc['id']; ?>');
                                                                                const downloadPdf = document.getElementById('downloadPdf-<?= $doc['id']; ?>');

                                                                                pdfViewer.src = pdfPath; // Set the PDF file path in the iframe
                                                                                downloadPdf.href = pdfPath; // Set the PDF file path in the download link
                                                                            });
                                                                        </script>
                                                                    </address>
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
                                                            <h6 class="mb-0 invoice-customer"><?= htmlspecialchars($doc['nom']); ?>-<?= htmlspecialchars($doc['label']); ?></h6>
                                                            <span class="fs-3 invoice-date text-nowrap text-body-color d-block"><?= $doc['updated_at']; ?></span>
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