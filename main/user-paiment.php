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
$update_sql = "UPDATE payment SET has_been_read = 1 WHERE id_client = ? AND has_been_read = 0";
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

    <!-- Payment -->
    <script src="https://www.paypal.com/sdk/js?client-id=AZXF0jhL5MrKuQKqyls4XlZPOGVF1GCEKFH56vu0h9qpcK2euVJ2pIiAmW_pnhiMOZb8V9G39_VIHi7r&currency=EUR"></script>
    <!-- stripe -->
    <script src="https://js.stripe.com/v3/"></script>

    <style>
        iframe {
            z-index: 0 !important;
        }
    </style>
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

                            $query = "SELECT id, fees, status, created_at FROM payment WHERE id_client = ? ORDER BY created_at DESC";
                            $stmt = $conn->prepare($query);
                            $stmt->bind_param("i", $client_id);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            $payment = [];
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $payment[] = $row;
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
                                                <?php foreach ($payment as $pay) : ?>
                                                    <li>
                                                        <a href="javascript:void(0)" class="p-3 bg-hover-light-black border-bottom d-flex align-items-start invoice-user listing-user bg-light-subtle"
                                                            data-invoice-id="<?= $pay['id']; ?>">
                                                            <div class="btn btn-primary round rounded-circle d-flex align-items-center justify-content-center">
                                                                <i class="ti ti-user fs-6"></i>
                                                            </div>
                                                            <div class="ms-3 d-inline-block w-75">
                                                                <h6 class="mb-0 invoice-customer">Frais à payer : <?= htmlspecialchars($pay['fees']); ?>€</h6>
                                                                <!-- <span class="fs-3 invoice-id text-truncate text-body-color d-block w-85">Id: #<!?= $pay['id']; ?></span> -->
                                                                <span class="fs-3 invoice-date text-nowrap text-body-color d-block"><?= $pay['created_at']; ?></span>
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
                                                <h4 class="text-uppercase mb-0">Paiement</h4>
                                            </div>
                                            <div class="p-3" id="custom-invoice">
                                                <?php foreach ($payment as $pay) : ?>
                                                    <div class="invoice-details invoice-<?= $pay['id']; ?>" style="display: none;">
                                                        <div class="row pt-3">
                                                            <div class="col-md-12">
                                                                <h6 class="text-muted fs-2 text-end mb-4"><?= $pay['created_at']; ?></h6>

                                                                <div class="text-end">
                                                                    <div class="container">
                                                                        <div class="row">

                                                                            <style>
                                                                                ._failed {
                                                                                    border-bottom: solid 4px red !important;
                                                                                }

                                                                                ._failed i {
                                                                                    color: red !important;
                                                                                }

                                                                                ._success {
                                                                                    box-shadow: 0 15px 25px #00000019;
                                                                                    padding: 20px;
                                                                                    width: 100%;
                                                                                    text-align: center;
                                                                                    margin: 40px auto;
                                                                                    border-bottom: solid 4px #28a745;
                                                                                }

                                                                                ._success i {
                                                                                    font-size: 55px;
                                                                                    color: #28a745;
                                                                                }

                                                                                ._success h2 {
                                                                                    margin-bottom: 12px;
                                                                                    font-size: 40px;
                                                                                    font-weight: 500;
                                                                                    line-height: 1.2;
                                                                                    margin-top: 10px;
                                                                                }

                                                                                ._success p {
                                                                                    margin-bottom: 0px;
                                                                                    font-size: 18px;
                                                                                    color: #495057;
                                                                                    font-weight: 500;
                                                                                }
                                                                            </style>


                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div>
                                                                                    <address class="text-start">
                                                                                        <h6>Demande de paiement des frais de traitement</h6>
                                                                                        <p class="text-muted">Bonjour, veuillez régler les frais de <span class="fw-bold text-dark"><?= htmlspecialchars($pay['fees']); ?>€</span> pour le traitement de votre demande. Merci de procéder au paiement dans les plus brefs délais.</p>
                                                                                    </address>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <!-- Content for the first half -->
                                                                                <?php
include 'db.php';

$status = ''; // Initialize status

$update_payment = "SELECT status FROM payment WHERE id_client = ?";
$stmt = $conn->prepare($update_payment);

if ($stmt) {
    $stmt->bind_param("i", $client_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $status = strtolower($row['status']); // Convert to lowercase for consistency
    }

    $stmt->close();
} else {
    die("Erreur lors de la préparation de la requête.");
}

// Display success message if paid, otherwise display PayPal button container
if ($status === 'paid') {
    echo '<div id="payment-success" style="
        width: 100%; max-width: 400px; margin: auto;
        background: rgb(255, 255, 255); color: #28a745; border: 2px solid #28a745; 
        padding: 20px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); font-size: 18px; 
        text-align: center; border-radius: 8px;">
        <iconify-icon icon="ooui:success" width="2em" height="2em" style="color: #28a745"></iconify-icon>
        <h4>Paiement réussi!</h4>
        <p style="color: black">Merci pour votre paiement.</p>
        <button onclick="openReceiptPopup()" style="
            background: #007bff; color: white; padding: 10px 15px; 
            border: none; border-radius: 5px; font-size: 16px; cursor: pointer;">
            Télécharger le reçu
        </button>
    </div>';

    echo "<script>
        function openReceiptPopup() {
            window.open('generate_receipt.php?client_id={$client_id}&amount=" . htmlspecialchars($pay['fees']) . "', '_blank');
        }
    </script>";
} else {
    echo '<div id="paypal-button-container"></div>';
}
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php if ($status !== 'paid'): ?>
    <!-- Only load PayPal script if the user hasn't paid -->
    <script>
        paypal.Buttons({
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: <?= htmlspecialchars($pay['fees']); ?> // Payment amount
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Replace PayPal button with success message
                    $("#paypal-button-container").html(`
                        <div id="payment-success" style="
                            width: 100%; max-width: 400px; margin: auto;
                            background: rgb(255, 255, 255); color: #28a745; border: 2px solid #28a745; 
                            padding: 20px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); font-size: 18px; 
                            text-align: center; border-radius: 8px;">
                            <iconify-icon icon="ooui:success" width="2em" height="2em" style="color: #28a745"></iconify-icon>
                            <h4>Paiement réussi!</h4>
                            <p style="color: black">Merci pour votre paiement.</p>
                            <button onclick="openReceiptPopup()" style="
                                background: #007bff; color: white; padding: 10px 15px; 
                                border: none; border-radius: 5px; font-size: 16px; cursor: pointer;">
                                Télécharger le reçu
                            </button>
                        </div>
                    `);

                    // Define the openReceiptPopup function
                    window.openReceiptPopup = function() {
                        window.open('generate_receipt.php?client_id=<?= $client_id; ?>&amount=<?= htmlspecialchars($pay['fees']); ?>', '_blank');
                    };

                    // Send AJAX request to update payment status in DB
                    $.ajax({
                        url: "update_payment.php",
                        type: "POST",
                        data: {
                            client_id: <?= $client_id; ?>
                        },
                        success: function(response) {
                            console.log(response);
                        },
                        error: function() {
                            alert("Erreur lors de la mise à jour du paiement.");
                        }
                    });
                });
            },
            onError: function(err) {
                console.error('Error:', err);
                alert('Une erreur s\'est produite. Veuillez réessayer.');
            }
        }).render('#paypal-button-container');
    </script>
<?php endif; ?>

                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 d-none">
                                                                                <!-- Content for the second half -->
                                                                                <!-- STRIPE CODE -->
                                                                                <style>
                                                                                    #payment-form {
                                                                                        max-width: 400px;
                                                                                        margin: auto;
                                                                                        padding: 20px;
                                                                                        background: #f9f9f9;
                                                                                        border-radius: 8px;
                                                                                        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                                                                                        text-align: center;
                                                                                    }

                                                                                    #card-element {
                                                                                        padding: 10px;
                                                                                        background: white;
                                                                                        border-radius: 5px;
                                                                                        border: 1px solid #ccc;
                                                                                    }

                                                                                    #submit {
                                                                                        width: 100%;
                                                                                        padding: 10px;
                                                                                        background: #4CAF50;
                                                                                        color: white;
                                                                                        border: none;
                                                                                        border-radius: 5px;
                                                                                        font-size: 16px;
                                                                                        cursor: pointer;
                                                                                        transition: 0.3s;
                                                                                    }

                                                                                    #submit:hover {
                                                                                        background: #45a049;
                                                                                    }

                                                                                    #card-errors,
                                                                                    #payment-message {
                                                                                        margin-top: 10px;
                                                                                        text-align: center;
                                                                                    }

                                                                                    #payment-message {
                                                                                        padding: 15px;
                                                                                        font-size: 16px;
                                                                                        color: white;
                                                                                        border-radius: 5px;
                                                                                        display: none;
                                                                                    }

                                                                                    /* Loader (spinner) */
                                                                                    .spinner {
                                                                                        display: none;
                                                                                        margin: 10px auto;
                                                                                        width: 20px;
                                                                                        height: 20px;
                                                                                        border: 4px solid rgba(255, 255, 255, 0.3);
                                                                                        border-radius: 50%;
                                                                                        border-top: 4px solid white;
                                                                                        animation: spin 1s linear infinite;
                                                                                    }

                                                                                    @keyframes spin {
                                                                                        0% {
                                                                                            transform: rotate(0deg);
                                                                                        }

                                                                                        100% {
                                                                                            transform: rotate(360deg);
                                                                                        }
                                                                                    }
                                                                                </style>

                                                                                <form id="payment-form">
                                                                                    <div id="card-element"></div>
                                                                                    <div id="card-errors" role="alert"></div>
                                                                                    <button id="submit">
                                                                                        💳 Pay Now
                                                                                        <div class="spinner-border spinner-border-sm ms-2" id="loading-spinner" style="display:none;" role="status">
                                                                                            <span class="visually-hidden">Loading...</span>
                                                                                        </div>
                                                                                    </button>

                                                                                    <div id="payment-message"></div> <!-- Success message container -->
                                                                                </form>

                                                                                <script>
                                                                                    var stripe = Stripe('pk_test_51R1cUNQrKQxJd0p5SPTW8eoZg2XGiyu8iO8cFFa5PNYALZ7aXIxeem7THpgQiTM0aUFPy1SjskUhVt3onLa1W8Av00W3v3m9lI');
                                                                                    var elements = stripe.elements();
                                                                                    var card = elements.create('card');
                                                                                    card.mount('#card-element');

                                                                                    document.getElementById('payment-form').addEventListener('submit', async function(event) {
                                                                                        event.preventDefault();

                                                                                        let submitButton = document.getElementById('submit');
                                                                                        let spinner = document.getElementById('loading-spinner');
                                                                                        let messageContainer = document.getElementById('payment-message');

                                                                                        // Show loading spinner
                                                                                        submitButton.disabled = true;
                                                                                        spinner.style.display = "inline-block";

                                                                                        const {
                                                                                            token,
                                                                                            error
                                                                                        } = await stripe.createToken(card);

                                                                                        if (error) {
                                                                                            document.getElementById('card-errors').innerHTML = `<div style="padding: 10px; background: #ff4d4d; color: white; border-radius: 5px;">❌ ${error.message}</div>`;
                                                                                            spinner.style.display = "none"; // Hide spinner on error
                                                                                            submitButton.disabled = false;
                                                                                        } else {
                                                                                            const response = await fetch('charge.php', {
                                                                                                method: 'POST',
                                                                                                headers: {
                                                                                                    'Content-Type': 'application/json'
                                                                                                },
                                                                                                body: JSON.stringify({
                                                                                                    token: token.id
                                                                                                })
                                                                                            });

                                                                                            const result = await response.json();

                                                                                            spinner.style.display = "none"; // Hide spinner after response
                                                                                            submitButton.disabled = false;

                                                                                            if (result.success) {
                                                                                                messageContainer.innerHTML = result.message;
                                                                                                messageContainer.style.display = "block";
                                                                                                messageContainer.style.background = "#4CAF50"; // Green for success
                                                                                            } else {
                                                                                                document.getElementById('card-errors').innerHTML = `<div style="padding: 10px; background: #ff4d4d; color: white; border-radius: 5px;">❌ ${result.error}</div>`;
                                                                                            }
                                                                                        }
                                                                                    });
                                                                                </script>

                                                                                <!-- STRIPE CODE -->
                                                                            </div>
                                                                        </div>
                                                                    </div>

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
                                            <?php foreach ($payment as $pay) : ?>
                                                <li>
                                                    <a href="javascript:void(0)" class="p-3 bg-hover-light-black border-bottom d-flex align-items-start invoice-user listing-user bg-light-subtle"
                                                        data-invoice-id="<?= $pay['id']; ?>">
                                                        <div class="btn btn-primary round rounded-circle d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-user fs-6"></i>
                                                        </div>
                                                        <div class="ms-3 d-inline-block w-75">
                                                            <h6 class="mb-0 invoice-customer">Frais à payer : <?= htmlspecialchars($pay['fees']); ?>€</h6>
                                                            <span class="fs-3 invoice-date text-nowrap text-body-color d-block"><?= $pay['created_at']; ?></span>
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