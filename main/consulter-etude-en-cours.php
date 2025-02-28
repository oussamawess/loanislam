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
  <link rel="stylesheet" href="../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">


  <link rel="stylesheet" href="../assets/libs/prismjs/themes/prism-okaidia.min.css">
</head>

<body>
  <!-- Toast -->
  <div class="toast toast-onload align-items-center text-bg-primary border-0" role="alert" aria-live="assertive"
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
  </div>
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
                  <a class="sidebar-link" href="tableau-de-bord.php" id="get-url" aria-expanded="false">
                    <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                    <span class="hide-menu">Tableau de bord</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link" href="tableau-de-bord.php" id="get-url" aria-expanded="false">
                    <iconify-icon icon="mage:dashboard-fill"></iconify-icon>
                    <span class="hide-menu">Tableau de bord</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link" href="nouvelles-demandes.php" id="get-url" aria-expanded="false">
                    <iconify-icon icon="solar:users-group-rounded-linear"></iconify-icon>
                    <span class="hide-menu">Nouvelles demandes</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link" href="en-attente-detudes.php" id="get-url" aria-expanded="false">
                    <iconify-icon icon="solar:calendar-linear"></iconify-icon>
                    <span class="hide-menu">En attente d'études</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link" href="etude-en-cours.php" id="get-url" aria-expanded="false">
                    <iconify-icon icon="solar:server-2-outline"></iconify-icon>
                    <span class="hide-menu">Étude en cours</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link" href="en-attente-signature-contrat.php" id="get-url" aria-expanded="false">
                    <iconify-icon icon="solar:chart-2-outline"></iconify-icon>
                    <span class="hide-menu">En Attente signature<br> contrat</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link" href="contrat-signe.php" id="get-url" aria-expanded="false">
                    <iconify-icon icon="mingcute:bubble-line" width="1.2em" height="1.2em"></iconify-icon>
                    <span class="hide-menu">Contrat signé</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link" href="contrat-annule.php" id="get-url" aria-expanded="false">
                    <iconify-icon icon="mynaui:credit-card-minus" width="1.2em" height="1.2em"></iconify-icon>
                    <span class="hide-menu">Contrat annulé</span>
                  </a>
                </li>

                <li>
                  <span class="sidebar-divider"></span>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link" href="notifications.php" id="get-url" aria-expanded="false">
                    <iconify-icon icon="cuida:notification-bell-outline"></iconify-icon>
                    <span class="hide-menu">Notifications</span>
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

                <li class="sidebar-item d-none">
                  <a class="sidebar-link" href="consulter-nouvelles-demandes.php" id="get-url" aria-expanded="false">
                    <iconify-icon icon="solar:users-group-rounded-linear"></iconify-icon>
                    <span class="hide-menu">consulter Nouvelles demandes</span>
                  </a>
                </li>

                <li class="sidebar-item d-none">
                  <a class="sidebar-link" href="consulter-en-attente-detude.php" id="get-url" aria-expanded="false">
                    <iconify-icon icon="solar:users-group-rounded-linear"></iconify-icon>
                    <span class="hide-menu">consulter en attente d'etude</span>
                  </a>
                </li>

                <li class="sidebar-item d-none">
                  <a class="sidebar-link" href="consulter-etude-en-cours.php" id="get-url" aria-expanded="false">
                    <iconify-icon icon="solar:users-group-rounded-linear"></iconify-icon>
                    <span class="hide-menu">consulter etude en cours</span>
                  </a>
                </li>

                <li class="sidebar-item d-none">
                  <a class="sidebar-link" href="consulter-en-attente-signature-contrat.php" id="get-url" aria-expanded="false">
                    <iconify-icon icon="solar:users-group-rounded-linear"></iconify-icon>
                    <span class="hide-menu">consulter en attente signature contrat</span>
                  </a>
                </li>

                <?php
                // Check if 'id' is set in the URL
                if (isset($_GET['id'])) {
                  $client_id_link = $_GET['id']; // Get the 'id' value directly from the URL (e.g., 's10')
                } else {
                  echo "No ID provided in the URL.";
                }
                ?>


                <li class="sidebar-item d-none">
                  <a style="display: none;" href="consulter-nouvelles-demandes.php?id=<?= htmlspecialchars($client_id_link); ?>" id="get-url" class="sidebar-link" aria-expanded="false"></a>
                  <a class="sidebar-link" href="consulter-nouvelles-demandes.php" id="get-url" aria-expanded="false"></a>

                  <a style="display: none;" href="consulter-en-attente-detude.php?id=<?= htmlspecialchars($client_id_link); ?>" id="get-url" class="sidebar-link" aria-expanded="false"></a>
                  <a class="sidebar-link" href="consulter-en-attente-detude.php" id="get-url" aria-expanded="false"></a>

                  <a style="display: none;" href="consulter-etude-en-cours.php?id=<?= htmlspecialchars($client_id_link); ?>" id="get-url" class="sidebar-link" aria-expanded="false"></a>
                  <a class="sidebar-link" href="consulter-etude-en-cours.php" id="get-url" aria-expanded="false"></a>

                  <a style="display: none;" href="consulter-en-attente-signature-contrat.php?id=<?= htmlspecialchars($client_id_link); ?>" id="get-url" class="sidebar-link" aria-expanded="false"></a>
                  <a class="sidebar-link" href="consulter-en-attente-signature-contrat.php" id="get-url" aria-expanded="false"></a>
                </li>
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
      <header class="topbar">
        <div class="with-vertical">
          <!-- ---------------------------------- -->
          <!-- Start Vertical Layout Header -->
          <!-- ---------------------------------- -->
          <nav class="navbar navbar-expand-lg p-0">
            <ul class="navbar-nav">
              <li class="nav-item d-flex d-xl-none">
                <a class="nav-link nav-icon-hover-bg rounded-circle  sidebartoggler " id="headerCollapse"
                  href="javascript:void(0)">
                  <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-6"></iconify-icon>
                </a>
              </li>
              <li class="nav-item d-none d-xl-flex nav-icon-hover-bg rounded-circle">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <iconify-icon icon="solar:magnifer-linear" class="fs-6"></iconify-icon>
                </a>
              </li>
              <li class="nav-item d-none d-lg-flex dropdown nav-icon-hover-bg rounded-circle">
                <div class="hover-dd">
                  <a class="nav-link" id="drop2" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">
                    <iconify-icon icon="solar:widget-3-line-duotone" class="fs-6"></iconify-icon>
                  </a>
                  <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0 overflow-hidden"
                    aria-labelledby="drop2">
                    <div class="position-relative">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="p-4 pb-3">

                            <div class="row">
                              <div class="col-md-6">
                                <div class="position-relative">
                                  <a href="../main/app-chat.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:chat-line-bold-duotone"
                                        class="fs-7 text-primary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Chat Application</h6>
                                      <span class="fs-11 d-block text-body-color">New messages arrived</span>
                                    </div>
                                  </a>
                                  <a href="../main/app-invoice.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:bill-list-bold-duotone"
                                        class="fs-7 text-secondary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Invoice App</h6>
                                      <span class="fs-11 d-block text-body-color">Get latest invoice</span>
                                    </div>
                                  </a>
                                  <a href="../main/app-contact2.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:phone-calling-rounded-bold-duotone"
                                        class="fs-7 text-warning"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Contact Application</h6>
                                      <span class="fs-11 d-block text-body-color">2 Unsaved Contacts</span>
                                    </div>
                                  </a>
                                  <a href="../main/app-email.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:letter-bold-duotone"
                                        class="fs-7 text-danger"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Email App</h6>
                                      <span class="fs-11 d-block text-body-color">Get new emails</span>
                                    </div>
                                  </a>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="position-relative">
                                  <a href="../main/page-user-profile.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:user-bold-duotone"
                                        class="fs-7 text-success"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">User Profile</h6>
                                      <span class="fs-11 d-block text-body-color">learn more information</span>
                                    </div>
                                  </a>
                                  <a href="../main/app-calendar.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:calendar-minimalistic-bold-duotone"
                                        class="fs-7 text-primary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Calendar App</h6>
                                      <span class="fs-11 d-block text-body-color">Get dates</span>
                                    </div>
                                  </a>
                                  <a href="../main/app-contact.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:smartphone-2-bold-duotone"
                                        class="fs-7 text-secondary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Contact List Table</h6>
                                      <span class="fs-11 d-block text-body-color">Add new contact</span>
                                    </div>
                                  </a>
                                  <a href="../main/app-notes.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:notes-bold-duotone"
                                        class="fs-7 text-warning"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Notes Application</h6>
                                      <span class="fs-11 d-block text-body-color">To-do and Daily tasks</span>
                                    </div>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-4 d-none d-lg-flex">
                          <img src="../assets/images/backgrounds/mega-dd-bg.jpg" alt="mega-dd"
                            class="img-fluid mega-dd-bg" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>

            <div class="d-block d-lg-none py-9 py-xl-0">
              <img src="../assets/images/logos/loanislam.png" alt="matdash-img" height="35" />
            </div>
            <a class="navbar-toggler p-0 border-0 nav-icon-hover-bg rounded-circle" href="javascript:void(0)"
              data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
              aria-label="Toggle navigation">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="fs-6"></iconify-icon>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="navbar-nav flex-row mx-auto ms-lg-auto align-items-center justify-content-center">
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)"
                      class="nav-link nav-icon-hover-bg rounded-circle d-flex d-lg-none align-items-center justify-content-center"
                      type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                      aria-controls="offcanvasWithBothOptions">
                      <iconify-icon icon="solar:sort-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link moon dark-layout nav-icon-hover-bg rounded-circle" href="javascript:void(0)">
                      <iconify-icon icon="solar:moon-line-duotone" class="moon fs-6"></iconify-icon>
                    </a>
                    <a class="nav-link sun light-layout nav-icon-hover-bg rounded-circle" href="javascript:void(0)"
                      style="display: none">
                      <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-6"></iconify-icon>
                    </a>
                  </li>
                  <li class="nav-item d-block d-xl-none">
                    <a class="nav-link nav-icon-hover-bg rounded-circle" href="javascript:void(0)"
                      data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <iconify-icon icon="solar:magnifer-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                  </li>

                  <!-- ------------------------------- -->
                  <!-- start notification Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                    <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <iconify-icon icon="solar:bell-bing-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                      aria-labelledby="drop2">
                      <div class="d-flex align-items-center justify-content-between py-3 px-7">
                        <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                        <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                      </div>
                      <div class="message-body" data-simplebar>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span
                            class="flex-shrink-0 bg-danger-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-danger">
                            <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Launch Admin</h6>
                              <span class="d-block fs-2">9:30 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span
                            class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:calendar-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Event today</h6>
                              <span class="d-block fs-2">9:15 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just a reminder that you have
                              event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span
                            class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Settings</h6>
                              <span class="d-block fs-2">4:36 PM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">You can customize this template as
                              you want</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span
                            class="flex-shrink-0 bg-warning-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-warning">
                            <iconify-icon icon="solar:widget-4-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Launch Admin</h6>
                              <span class="d-block fs-2">9:30 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span
                            class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:calendar-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Event today</h6>
                              <span class="d-block fs-2">9:15 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just a reminder that you have
                              event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span
                            class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Settings</h6>
                              <span class="d-block fs-2">4:36 PM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">You can customize this template as
                              you want</span>
                          </div>
                        </a>
                      </div>
                      <div class="py-6 px-7 mb-1">
                        <button class="btn btn-primary w-100">See All Notifications</button>
                      </div>

                    </div>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end notification Dropdown -->
                  <!-- ------------------------------- -->

                  <!-- ------------------------------- -->
                  <!-- start language Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                    <a class="nav-link" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <img src="../assets/images/flag/icon-flag-en.svg" alt="matdash-img" width="20px" height="20px"
                        class="rounded-circle object-fit-cover round-20" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="message-body">
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="../assets/images/flag/icon-flag-en.svg" alt="matdash-img" width="20px"
                              height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">English (UK)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="../assets/images/flag/icon-flag-cn.svg" alt="matdash-img" width="20px"
                              height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">中国人 (Chinese)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="../assets/images/flag/icon-flag-fr.svg" alt="matdash-img" width="20px"
                              height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">français (French)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="../assets/images/flag/icon-flag-sa.svg" alt="matdash-img" width="20px"
                              height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">عربي (Arabic)</p>
                        </a>
                      </div>
                    </div>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end language Dropdown -->
                  <!-- ------------------------------- -->

                  <!-- ------------------------------- -->
                  <!-- start profile Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:void(0)" id="drop1" aria-expanded="false">
                      <div class="d-flex align-items-center gap-2 lh-base">
                        <img src="../assets/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35"
                          alt="matdash-img" />
                        <iconify-icon icon="solar:alt-arrow-down-bold" class="fs-2"></iconify-icon>
                      </div>
                    </a>
                    <div class="dropdown-menu profile-dropdown dropdown-menu-end dropdown-menu-animate-up"
                      aria-labelledby="drop1">
                      <div class="position-relative px-4 pt-3 pb-2">
                        <div class="d-flex align-items-center mb-3 pb-3 border-bottom gap-6">
                          <img src="../assets/images/profile/user-1.jpg" class="rounded-circle" width="56" height="56"
                            alt="matdash-img" />
                          <div>
                            <h5 class="mb-0 fs-12">David McMichael <span class="text-success fs-11">Pro</span>
                            </h5>
                            <p class="mb-0 text-dark">
                              david@wrappixel.com
                            </p>
                          </div>
                        </div>
                        <div class="message-body">
                          <a href="../main/page-user-profile.html" class="p-2 dropdown-item h6 rounded-1">
                            My Profile
                          </a>
                          <a href="../main/page-pricing.html" class="p-2 dropdown-item h6 rounded-1">
                            My Subscription
                          </a>
                          <a href="../main/app-invoice.html" class="p-2 dropdown-item h6 rounded-1">
                            My Invoice <span class="badge bg-danger-subtle text-danger rounded ms-8">4</span>
                          </a>
                          <a href="../main/page-account-settings.html" class="p-2 dropdown-item h6 rounded-1">
                            Account Settings
                          </a>
                          <a href="../main/authentication-login2.html" class="p-2 dropdown-item h6 rounded-1">
                            Sign Out
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end profile Dropdown -->
                  <!-- ------------------------------- -->
                </ul>
              </div>
            </div>
          </nav>
          <!-- ---------------------------------- -->
          <!-- End Vertical Layout Header -->
          <!-- ---------------------------------- -->

          <!-- ------------------------------- -->
          <!-- apps Dropdown in Small screen -->
          <!-- ------------------------------- -->
          <!--  Mobilenavbar -->
          <div class="offcanvas offcanvas-start pt-0" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
            aria-labelledby="offcanvasWithBothOptionsLabel">
            <nav class="sidebar-nav scroll-sidebar">
              <div class="offcanvas-header justify-content-between">
                <a href="../main/index.html" class="text-nowrap logo-img">
                  <img src="../assets/images/logos/logo-icon.svg" alt="Logo" />
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body pt-0" data-simplebar style="height: calc(100vh - 80px)">
                <ul id="sidebarnav">
                  <li class="sidebar-item">
                    <a class="sidebar-link has-arrow ms-0" href="javascript:void(0)" aria-expanded="false">
                      <span>
                        <iconify-icon icon="solar:slider-vertical-line-duotone" class="fs-7"></iconify-icon>
                      </span>
                      <span class="hide-menu">Apps</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level my-3 ps-3">
                      <li class="sidebar-item py-2">
                        <a href="../main/app-chat.html" class="d-flex align-items-center">
                          <div
                            class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:chat-line-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Chat Application</h6>
                            <span class="fs-11 d-block text-body-color">New messages arrived</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="../main/app-invoice.html" class="d-flex align-items-center">
                          <div
                            class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:bill-list-bold-duotone"
                              class="fs-7 text-secondary"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Invoice App</h6>
                            <span class="fs-11 d-block text-body-color">Get latest invoice</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="../main/app-contact2.html" class="d-flex align-items-center">
                          <div
                            class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:phone-calling-rounded-bold-duotone"
                              class="fs-7 text-warning"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Contact Application</h6>
                            <span class="fs-11 d-block text-body-color">2 Unsaved Contacts</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="../main/app-email.html" class="d-flex align-items-center">
                          <div
                            class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:letter-bold-duotone" class="fs-7 text-danger"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Email App</h6>
                            <span class="fs-11 d-block text-body-color">Get new emails</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="../main/page-user-profile.html" class="d-flex align-items-center">
                          <div
                            class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:user-bold-duotone" class="fs-7 text-success"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">User Profile</h6>
                            <span class="fs-11 d-block text-body-color">learn more information</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="../main/app-calendar.html" class="d-flex align-items-center">
                          <div
                            class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:calendar-minimalistic-bold-duotone"
                              class="fs-7 text-primary"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Calendar App</h6>
                            <span class="fs-11 d-block text-body-color">Get dates</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="../main/app-contact.html" class="d-flex align-items-center">
                          <div
                            class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:smartphone-2-bold-duotone"
                              class="fs-7 text-secondary"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Contact List Table</h6>
                            <span class="fs-11 d-block text-body-color">Add new contact</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="../main/app-notes.html" class="d-flex align-items-center">
                          <div
                            class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:notes-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Notes Application</h6>
                            <span class="fs-11 d-block text-body-color">To-do and Daily tasks</span>
                          </div>
                        </a>
                      </li>
                  </li>
                </ul>
              </div>
            </nav>
          </div>

        </div>
        <div class="app-header with-horizontal">
          <nav class="navbar navbar-expand-xl container-fluid p-0">
            <ul class="navbar-nav align-items-center">
              <li class="nav-item d-flex d-xl-none">
                <a class="nav-link sidebartoggler nav-icon-hover-bg rounded-circle" id="sidebarCollapse"
                  href="javascript:void(0)">
                  <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-7"></iconify-icon>
                </a>
              </li>
              <li class="nav-item d-none d-xl-flex align-items-center">
                <a href="../main/index.html" class="text-nowrap nav-link">
                  <img src="../assets/images/logos/logo.svg" alt="matdash-img" />
                </a>
              </li>
              <li class="nav-item d-none d-xl-flex align-items-center nav-icon-hover-bg rounded-circle">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <iconify-icon icon="solar:magnifer-linear" class="fs-6"></iconify-icon>
                </a>
              </li>
              <li class="nav-item d-none d-lg-flex align-items-center dropdown nav-icon-hover-bg rounded-circle">
                <div class="hover-dd">
                  <a class="nav-link" id="drop2" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">
                    <iconify-icon icon="solar:widget-3-line-duotone" class="fs-6"></iconify-icon>
                  </a>
                  <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0 overflow-hidden"
                    aria-labelledby="drop2">
                    <div class="position-relative">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="p-4 pb-3">

                            <div class="row">
                              <div class="col-md-6">
                                <div class="position-relative">
                                  <a href="../main/app-chat.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:chat-line-bold-duotone"
                                        class="fs-7 text-primary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Chat Application</h6>
                                      <span class="fs-11 d-block text-body-color">New messages arrived</span>
                                    </div>
                                  </a>
                                  <a href="../main/app-invoice.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:bill-list-bold-duotone"
                                        class="fs-7 text-secondary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Invoice App</h6>
                                      <span class="fs-11 d-block text-body-color">Get latest invoice</span>
                                    </div>
                                  </a>
                                  <a href="../main/app-contact2.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:phone-calling-rounded-bold-duotone"
                                        class="fs-7 text-warning"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Contact Application</h6>
                                      <span class="fs-11 d-block text-body-color">2 Unsaved Contacts</span>
                                    </div>
                                  </a>
                                  <a href="../main/app-email.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:letter-bold-duotone"
                                        class="fs-7 text-danger"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Email App</h6>
                                      <span class="fs-11 d-block text-body-color">Get new emails</span>
                                    </div>
                                  </a>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="position-relative">
                                  <a href="../main/page-user-profile.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:user-bold-duotone"
                                        class="fs-7 text-success"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">User Profile</h6>
                                      <span class="fs-11 d-block text-body-color">learn more information</span>
                                    </div>
                                  </a>
                                  <a href="../main/app-calendar.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:calendar-minimalistic-bold-duotone"
                                        class="fs-7 text-primary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Calendar App</h6>
                                      <span class="fs-11 d-block text-body-color">Get dates</span>
                                    </div>
                                  </a>
                                  <a href="../main/app-contact.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:smartphone-2-bold-duotone"
                                        class="fs-7 text-secondary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Contact List Table</h6>
                                      <span class="fs-11 d-block text-body-color">Add new contact</span>
                                    </div>
                                  </a>
                                  <a href="../main/app-notes.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:notes-bold-duotone"
                                        class="fs-7 text-warning"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Notes Application</h6>
                                      <span class="fs-11 d-block text-body-color">To-do and Daily tasks</span>
                                    </div>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-4 d-none d-lg-flex">
                          <img src="../assets/images/backgrounds/mega-dd-bg.jpg" alt="mega-dd"
                            class="img-fluid mega-dd-bg" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <div class="d-block d-xl-none">
              <a href="../main/index.html" class="text-nowrap nav-link">
                <img src="../assets/images/logos/logo.svg" alt="matdash-img" />
              </a>
            </div>
            <a class="navbar-toggler nav-icon-hover p-0 border-0 nav-icon-hover-bg rounded-circle"
              href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
              </span>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                <ul class="navbar-nav flex-row mx-auto ms-lg-auto align-items-center justify-content-center">
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)"
                      class="nav-link nav-icon-hover-bg rounded-circle d-flex d-lg-none align-items-center justify-content-center"
                      type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                      aria-controls="offcanvasWithBothOptions">
                      <iconify-icon icon="solar:sort-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-icon-hover-bg rounded-circle moon dark-layout" href="javascript:void(0)">
                      <iconify-icon icon="solar:moon-line-duotone" class="moon fs-6"></iconify-icon>
                    </a>
                    <a class="nav-link nav-icon-hover-bg rounded-circle sun light-layout" href="javascript:void(0)"
                      style="display: none">
                      <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-6"></iconify-icon>
                    </a>
                  </li>
                  <li class="nav-item d-block d-xl-none">
                    <a class="nav-link nav-icon-hover-bg rounded-circle" href="javascript:void(0)"
                      data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <iconify-icon icon="solar:magnifer-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                  </li>

                  <!-- ------------------------------- -->
                  <!-- start notification Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                    <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <iconify-icon icon="solar:bell-bing-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                      aria-labelledby="drop2">
                      <div class="d-flex align-items-center justify-content-between py-3 px-7">
                        <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                        <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                      </div>
                      <div class="message-body" data-simplebar>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span
                            class="flex-shrink-0 bg-danger-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-danger">
                            <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Launch Admin</h6>
                              <span class="d-block fs-2">9:30 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span
                            class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:calendar-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Event today</h6>
                              <span class="d-block fs-2">9:15 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just a reminder that you have
                              event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span
                            class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Settings</h6>
                              <span class="d-block fs-2">4:36 PM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">You can customize this template as
                              you want</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span
                            class="flex-shrink-0 bg-warning-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-warning">
                            <iconify-icon icon="solar:widget-4-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Launch Admin</h6>
                              <span class="d-block fs-2">9:30 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span
                            class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:calendar-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Event today</h6>
                              <span class="d-block fs-2">9:15 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just a reminder that you have
                              event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span
                            class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Settings</h6>
                              <span class="d-block fs-2">4:36 PM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">You can customize this template as
                              you want</span>
                          </div>
                        </a>
                      </div>
                      <div class="py-6 px-7 mb-1">
                        <button class="btn btn-primary w-100">See All Notifications</button>
                      </div>

                    </div>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end notification Dropdown -->
                  <!-- ------------------------------- -->

                  <!-- ------------------------------- -->
                  <!-- start language Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                    <a class="nav-link" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <img src="../assets/images/flag/icon-flag-en.svg" alt="matdash-img" width="20px" height="20px"
                        class="rounded-circle object-fit-cover round-20" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="message-body">
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="../assets/images/flag/icon-flag-en.svg" alt="matdash-img" width="20px"
                              height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">English (UK)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="../assets/images/flag/icon-flag-cn.svg" alt="matdash-img" width="20px"
                              height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">中国人 (Chinese)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="../assets/images/flag/icon-flag-fr.svg" alt="matdash-img" width="20px"
                              height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">français (French)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="../assets/images/flag/icon-flag-sa.svg" alt="matdash-img" width="20px"
                              height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">عربي (Arabic)</p>
                        </a>
                      </div>
                    </div>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end language Dropdown -->
                  <!-- ------------------------------- -->

                  <!-- ------------------------------- -->
                  <!-- start profile Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:void(0)" id="drop1" aria-expanded="false">
                      <div class="d-flex align-items-center gap-2 lh-base">
                        <img src="../assets/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35"
                          alt="matdash-img" />
                        <iconify-icon icon="solar:alt-arrow-down-bold" class="fs-2"></iconify-icon>
                      </div>
                    </a>
                    <div class="dropdown-menu profile-dropdown dropdown-menu-end dropdown-menu-animate-up"
                      aria-labelledby="drop1">
                      <div class="position-relative px-4 pt-3 pb-2">
                        <div class="d-flex align-items-center mb-3 pb-3 border-bottom gap-6">
                          <img src="../assets/images/profile/user-1.jpg" class="rounded-circle" width="56" height="56"
                            alt="matdash-img" />
                          <div>
                            <h5 class="mb-0 fs-12">David McMichael <span class="text-success fs-11">Pro</span>
                            </h5>
                            <p class="mb-0 text-dark">
                              david@wrappixel.com
                            </p>
                          </div>
                        </div>
                        <div class="message-body">
                          <a href="../main/page-user-profile.html" class="p-2 dropdown-item h6 rounded-1">
                            My Profile
                          </a>
                          <a href="../main/page-pricing.html" class="p-2 dropdown-item h6 rounded-1">
                            My Subscription
                          </a>
                          <a href="../main/app-invoice.html" class="p-2 dropdown-item h6 rounded-1">
                            My Invoice <span class="badge bg-danger-subtle text-danger rounded ms-8">4</span>
                          </a>
                          <a href="../main/page-account-settings.html" class="p-2 dropdown-item h6 rounded-1">
                            Account Settings
                          </a>
                          <a href="../main/authentication-login2.html" class="p-2 dropdown-item h6 rounded-1">
                            Sign Out
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end profile Dropdown -->
                  <!-- ------------------------------- -->
                </ul>
              </div>
            </div>
          </nav>

        </div>
      </header>
      <!--  Header End -->

      <aside class="left-sidebar with-horizontal">
        <!-- Sidebar scroll-->
        <div>
          <!-- Sidebar navigation-->
          <nav id="sidebarnavh" class="sidebar-nav scroll-sidebar container-fluid">
            <ul id="sidebarnav">
              <!-- ============================= -->
              <!-- Home -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
              </li>
              <!-- =================== -->
              <!-- Dashboard -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span>
                    <iconify-icon icon="solar:layers-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Dashboard</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="../main/index.html" class="sidebar-link">
                      <i class="ti ti-aperture"></i>
                      <span class="hide-menu">Dashboard 1</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/index2.html" class="sidebar-link">
                      <i class="ti ti-shopping-cart"></i>
                      <span class="hide-menu">Dashboard 2</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/index3.html" class="sidebar-link">
                      <i class="ti ti-atom"></i>
                      <span class="hide-menu">Dashboard 3</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- ============================= -->
              <!-- Front Pages -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Front Pages</span>
              </li>

              <!-- =================== -->
              <!-- Icon -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:home-angle-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Front Pages</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/frontend-landingpage.html" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-circle"></i>
                      </span>
                      <span class="hide-menu">Homepage</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/frontend-aboutpage.html" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-circle"></i>
                      </span>
                      <span class="hide-menu">About Us</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/frontend-blogpage.html" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-circle"></i>
                      </span>
                      <span class="hide-menu">Blog</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/frontend-blogdetailpage.html"
                      aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-circle"></i>
                      </span>
                      <span class="hide-menu">Blog Details</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/frontend-contactpage.html" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-circle"></i>
                      </span>
                      <span class="hide-menu">Contact Us</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/frontend-portfoliopage.html"
                      aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-circle"></i>
                      </span>
                      <span class="hide-menu">Portfolio</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/frontend-pricingpage.html" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-circle"></i>
                      </span>
                      <span class="hide-menu">Pricing</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- ============================= -->
              <!-- Apps -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Apps</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link two-column has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span>
                    <iconify-icon icon="solar:widget-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Apps</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="../main/app-calendar.html" class="sidebar-link">
                      <i class="ti ti-calendar"></i>
                      <span class="hide-menu">Calendar</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/apps-kanban.html" class="sidebar-link">
                      <i class="ti ti-layout-kanban"></i>
                      <span class="hide-menu">Kanban</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/app-chat.html" class="sidebar-link">
                      <i class="ti ti-message-dots"></i>
                      <span class="hide-menu">Chat</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/app-email.html" aria-expanded="false">
                      <span>
                        <i class="ti ti-mail"></i>
                      </span>
                      <span class="hide-menu">Email</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/app-contact.html" class="sidebar-link">
                      <i class="ti ti-phone"></i>
                      <span class="hide-menu">Contact Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/app-contact2.html" class="sidebar-link">
                      <i class="ti ti-list-details"></i>
                      <span class="hide-menu">Contact List</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/app-notes.html" class="sidebar-link">
                      <i class="ti ti-notes"></i>
                      <span class="hide-menu">Notes</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/app-invoice.html" class="sidebar-link">
                      <i class="ti ti-file-text"></i>
                      <span class="hide-menu">Invoice</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/page-user-profile.html" class="sidebar-link">
                      <i class="ti ti-user-circle"></i>
                      <span class="hide-menu">User Profile</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/blog-posts.html" class="sidebar-link">
                      <i class="ti ti-article"></i>
                      <span class="hide-menu">Posts</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/blog-detail.html" class="sidebar-link">
                      <i class="ti ti-details"></i>
                      <span class="hide-menu">Detail</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/eco-shop.html" class="sidebar-link">
                      <i class="ti ti-shopping-cart"></i>
                      <span class="hide-menu">Shop</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/eco-shop-detail.html" class="sidebar-link">
                      <i class="ti ti-basket"></i>
                      <span class="hide-menu">Shop Detail</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/eco-product-list.html" class="sidebar-link">
                      <i class="ti ti-list-check"></i>
                      <span class="hide-menu">List</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/eco-checkout.html" class="sidebar-link">
                      <i class="ti ti-brand-shopee"></i>
                      <span class="hide-menu">Checkout</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/eco-add-product.html">
                      <i class="ti ti-file-plus"></i>
                      <span class="hide-menu">Add Product</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/eco-edit-product.html">
                      <i class="ti ti-file-pencil"></i>
                      <span class="hide-menu">Edit Product</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- PAGES -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">PAGES</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span>
                    <iconify-icon icon="solar:notes-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Pages</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="../main/page-faq.html" class="sidebar-link">
                      <i class="ti ti-help"></i>
                      <span class="hide-menu">FAQ</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/page-account-settings.html" class="sidebar-link">
                      <i class="ti ti-user-circle"></i>
                      <span class="hide-menu">Account Setting</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/page-pricing.html" class="sidebar-link">
                      <i class="ti ti-currency-dollar"></i>
                      <span class="hide-menu">Pricing</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/widgets-cards.html" class="sidebar-link">
                      <i class="ti ti-cards"></i>
                      <span class="hide-menu">Card</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/widgets-banners.html" class="sidebar-link">
                      <i class="ti ti-ad"></i>
                      <span class="hide-menu">Banner</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/widgets-charts.html" class="sidebar-link">
                      <i class="ti ti-chart-bar"></i>
                      <span class="hide-menu">Charts</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/starter.html" class="sidebar-link">
                      <i class="ti ti-file"></i>
                      <span class="hide-menu">Starter</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../landingpage/index.html" class="sidebar-link">
                      <i class="ti ti-app-window"></i>
                      <span class="hide-menu">Landing Page</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/icon-tabler.html" class="sidebar-link">
                      <i class="ti ti-mood-smile"></i>
                      <span class="hide-menu">Tabler Icon</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/icon-solar.html" class="sidebar-link">
                      <i class="ti ti-mood-smile"></i>
                      <span class="hide-menu">Solar Icon</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- UI -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">UI</span>
              </li>
              <!-- =================== -->
              <!-- UI Elements -->
              <!-- =================== -->
              <li class="sidebar-item mega-dropdown">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:archive-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">UI</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="../main/ui-accordian.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Accordian</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-badge.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Badge</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-buttons.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Buttons</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-dropdowns.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Dropdowns</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-modals.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Modals</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-tab.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Tab</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-tooltip-popover.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Tooltip & Popover</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-notification.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Notification</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-progressbar.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Progressbar</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-pagination.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Pagination</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-typography.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Typography</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-bootstrap-ui.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Bootstrap UI</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-breadcrumb.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Breadcrumb</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-offcanvas.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Offcanvas</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-lists.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Lists</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-grid.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Grid</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-carousel.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Carousel</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-scrollspy.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Scrollspy</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-spinner.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Spinner</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/ui-link.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Link</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Forms -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Forms</span>
              </li>
              <!-- =================== -->
              <!-- Forms -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link two-column has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:folder-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Forms</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <!-- form elements -->
                  <li class="sidebar-item">
                    <a href="../main/form-inputs.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Forms Input</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/form-input-groups.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Input Groups</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/form-input-grid.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Input Grid</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/form-checkbox-radio.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Checkbox & Radios</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/form-bootstrap-switch.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Bootstrap Switch</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/form-select2.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Select2</span>
                    </a>
                  </li>
                  <!-- form inputs -->
                  <li class="sidebar-item">
                    <a href="../main/form-basic.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Basic Form</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/form-vertical.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Vertical</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/form-horizontal.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Horizontal</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/form-actions.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Actions</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/form-row-separator.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Row Separator</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/form-bordered.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Bordered</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/form-detail.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Detail</span>
                    </a>
                  </li>
                  <!-- form wizard -->
                  <li class="sidebar-item">
                    <a href="../main/form-wizard.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Wizard</span>
                    </a>
                  </li>
                  <!-- Quill Editor -->
                  <li class="sidebar-item">
                    <a href="../main/form-editor-quill.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Quill Editor</span>
                    </a>
                  </li>
                  <!-- Tinymce Editor -->
                  <li class="sidebar-item">
                    <a href="../main/form-editor-tinymce.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Tinymce Editor</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Tables -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Tables</span>
              </li>
              <!-- =================== -->
              <!-- Bootstrap Table -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:tuning-square-2-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Tables</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="../main/table-basic.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Basic Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/table-dark-basic.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Dark Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/table-sizing.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Sizing Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/table-layout-coloured.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Coloured Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/table-datatable-basic.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Basic Initialisation</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/table-datatable-api.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">API</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/table-datatable-advanced.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Advanced</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Charts -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Charts</span>
              </li>
              <!-- =================== -->
              <!-- Apex Chart -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:chart-square-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Charts</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="../main/chart-apex-line.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Line Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/chart-apex-area.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Area Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/chart-apex-bar.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Bar Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/chart-apex-pie.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Pie Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/chart-apex-radial.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Radial Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../main/chart-apex-radar.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Radar Chart</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- multi level -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:airbuds-case-minimalistic-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Multi DD</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="../docs/index.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Documentation</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Page 1</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link has-arrow">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Page 2</span>
                    </a>
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2.1</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2.2</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2.3</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Page 3</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>

      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="row">



            <!-- start Grid With Row Label -->
            <?php
            include 'db.php'; // Include database connection

            // Check if 'id' is set in the URL
            if (isset($_GET['id']) && !empty($_GET['id'])) {
              $client_id = intval($_GET['id']); // Convert to integer for security

              // Fetch client details
              $sql = "SELECT * FROM client WHERE id = ?";
              $stmt = $conn->prepare($sql);
              $stmt->bind_param("i", $client_id);
              $stmt->execute();
              $result = $stmt->get_result();

              if ($result->num_rows > 0) {
                $client = $result->fetch_assoc();
            ?>

                <div class="card">
                  <div class="card-body p-2">
                    <h2 class="p-1 mt-3">Étude en cours: Demande <?= htmlspecialchars($client['id']); ?></h2>
                    <form action="#">
                      <!-- <div class=" d-flex justify-content-center p-3 flex-lg-row flex-sm-column"> -->
                      <div class="d-flex flex-column justify-content-center flex-md-row flex-lg-row p-3">
                        <div class="form-body p-3 m-2 border rounded col-12 col-md-6 col-lg-7">
                          <div class="d-flex align-items-center gap-6 mb-4 justify-content-between">
                            <span
                              class="round-48 d-flex align-items-center justify-content-center rounded bg-icons-dashboard">
                              <iconify-icon icon="solar:users-group-rounded-linear" width="2em" height="2em"
                                style="color: #22825d"></iconify-icon>
                            </span>
                            <h6 class="mb-0 fs-4 fw-medium" style="color: #22825d">Details</h6>
                          </div>
                          <div class="mb-3">
                            <div class="row align-items-center">
                              <label class="col-lg-3 form-label">Nom, prénom</label>
                              <div class="col-lg-9">
                                <div class="row">
                                  <div class="col-md-6 mb-2 mb-md-0">
                                    <input type="text" class="form-control" placeholder="John" value="<?= htmlspecialchars($client['nom']); ?>" readonly />
                                  </div>
                                  <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Doe" value="<?= htmlspecialchars($client['prenom']); ?>" readonly />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="row align-items-center">
                              <label class="col-lg-3 form-label">Age</label>
                              <div class="col-lg-9">
                                <div class="row">
                                  <div class="col-md-12 mb-2 mb-md-0">
                                    <input type="text" class="form-control" placeholder="35 Ans" value="<?= htmlspecialchars($client['age']); ?>" readonly />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="row align-items-center">
                              <label class="col-lg-3 form-label">Téléphone</label>
                              <div class="col-lg-9">
                                <div class="row">
                                  <div class="col-md-12 mb-2 mb-md-0">
                                    <input type="text" class="form-control" placeholder="+1-202-555-0116" value="<?= htmlspecialchars($client['telephone']); ?>" readonly />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="row align-items-center">
                              <label class="col-lg-3 form-label">Email</label>
                              <div class="col-lg-9">
                                <div class="row">
                                  <div class="col-md-12 mb-2 mb-md-0">
                                    <input type="text" class="form-control" placeholder="john.doe@gmail.com" value="<?= htmlspecialchars($client['email']); ?>" readonly />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="row align-items-center">
                              <label class="col-lg-3 form-label">Adresse</label>
                              <div class="col-lg-9">
                                <div class="row">
                                  <div class="col-md-12 mb-2 mb-md-0">
                                    <input type="text" class="form-control"
                                      placeholder="12 rue de la Croissant. Appartement 3D. 56000" value="<?= htmlspecialchars($client['adress']); ?>" readonly />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="row align-items-center">
                              <label class="col-lg-3 form-label">Profession</label>
                              <div class="col-lg-9">
                                <div class="row">
                                  <div class="col-md-12 mb-2 mb-md-0">
                                    <input type="text" class="form-control" placeholder="Ingénieur Informatique" value="<?= htmlspecialchars($client['profession']); ?>" readonly />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="row align-items-center">
                              <label class="col-lg-3 form-label">Salaire Brut</label>
                              <div class="col-lg-9">
                                <div class="row">
                                  <div class="col-md-12 mb-2 mb-md-0">
                                    <input type="text" class="form-control" placeholder="3500€" value="<?= htmlspecialchars($client['salaire_brut']); ?>" readonly />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="row align-items-center">
                              <label class="col-lg-3 form-label">Statut</label>
                              <div class="col-lg-9">
                                <div class="row">
                                  <div class="col-md-12 mb-2 mb-md-0">
                                    <input type="text" class="form-control" placeholder="Célibataire" value="<?= htmlspecialchars($client['statut_civil']); ?>" readonly />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php
                          if ($client['have_partner'] == 1) {
                            echo '<div class="mb-3">
                              <button type="button" class="my-4 col-lg-12 col-md-12 d-flex gap-3 bg-transparent border-0"
                                id="toggleButton">
                                <div class="d-flex">
                                  <label class="fw-bold">Consulter les données coemprunteur</label>
                                </div>
                                <div class="d-flex">
                                  <iconify-icon icon="icons8:plus" width="1.5em" height="1.5em"
                                    style="color: #000"></iconify-icon>
                                </div>
                              </button>
                            </div>';
                          }
                          ?>
                        </div>
                        <div class="form-body p-3 m-2 border rounded col-12 col-md-6 col-lg-5">
                          <div class="d-flex align-items-center gap-6 mb-4 justify-content-between">
                            <span
                              class="round-48 d-flex align-items-center justify-content-center rounded bg-icons-dashboard">
                              <iconify-icon icon="lets-icons:bubble" width="2em" height="2em"
                                style="color: #22825d"></iconify-icon>
                            </span>
                            <h6 class="mb-0 fs-4 fw-medium" style="color: #22825d">Simulation</h6>
                          </div>
                          <div class="mb-3">
                            <div class="row align-items-center">
                              <label class="col-lg-6 form-label">Montant souhaité</label>
                              <div class="col-lg-6">
                                <div class="row">
                                  <div class="col-md-12 mb-2 mb-md-0">
                                    <input type="text" class="form-control" placeholder="150.000€" value="<?= htmlspecialchars($client['montant_souhaite']); ?>" readonly />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="row align-items-center">
                              <label class="col-lg-6 form-label">D.Remboursement</label>
                              <div class="col-lg-6">
                                <div class="row">
                                  <div class="col-md-12 mb-2 mb-md-0">
                                    <input type="text" class="form-control" placeholder="24 mois" value="<?= htmlspecialchars($client['duree_remboursement']); ?>" readonly />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="row align-items-center">
                              <label class="col-lg-6 form-label">Type de maison</label>
                              <div class="col-lg-6">
                                <div class="row">
                                  <div class="col-md-12 mb-2 mb-md-0">
                                    <input type="text" class="form-control" placeholder="520€" value="<?= htmlspecialchars($client['type_maison']); ?>" readonly />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="row align-items-center">
                              <label class="col-lg-6 form-label">Montant total dû</label>
                              <div class="col-lg-6">
                                <div class="row">
                                  <div class="col-md-12 mb-2 mb-md-0">
                                    <input type="text" class="form-control" placeholder="170.000€" value="<?= htmlspecialchars($client['montant_total_du']); ?>" readonly />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex align-items-center gap-6 mb-4 justify-content-between">
                            <span
                              class="round-48 d-flex align-items-center justify-content-center rounded bg-icons-dashboard">
                              <iconify-icon icon="ic:outline-book" width="2em" height="2em"
                                style="color: #22825d"></iconify-icon>
                            </span>
                            <h6 class="mb-0 fs-4 fw-medium" style="color: #22825d">Documents</h6>
                          </div>
                          <div class="mb-3">
                            <div class="row align-items-center">
                              <label class="col-lg-6 form-label">Fichier de paie</label>
                              <div class="col-lg-6">
                                <div class="row">
                                  <div class="col-md-12 mb-2 mb-md-0">
                                    <!-- Button to trigger the modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdfModal" data-pdf-path="<?= htmlspecialchars($client['fichier_paie']); ?>">
                                      Afficher PDF
                                    </button>

                                    <!-- Bootstrap Modal -->
                                    <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="pdfModalLabel">PDF Viewer</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <!-- PDF Display -->
                                            <iframe id="pdfViewer" src="" width="100%" height="400px" style="border: none;"></iframe>
                                          </div>
                                          <div class="modal-footer">
                                            <!-- Download Button -->
                                            <a id="downloadPdf" href="" class="btn btn-success" download>
                                              <i class="fas fa-download"></i> Télécharger PDF
                                            </a>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <script>
                                      // Add an event listener to the modal to set the PDF path
                                      document.getElementById('pdfModal').addEventListener('show.bs.modal', function(event) {
                                        // Get the button that triggered the modal
                                        const button = event.relatedTarget;

                                        // Get the PDF path from the data-pdf-path attribute
                                        const pdfPath = button.getAttribute('data-pdf-path');

                                        // Set the PDF path in the iframe and download link
                                        const pdfViewer = document.getElementById('pdfViewer');
                                        const downloadPdf = document.getElementById('downloadPdf');

                                        pdfViewer.src = pdfPath; // Set the PDF file path in the iframe
                                        downloadPdf.href = pdfPath; // Set the PDF file path in the download link
                                      });
                                    </script>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="row align-items-center">
                              <label class="col-lg-6 form-label">Attestation Salaire</label>
                              <div class="col-lg-6">
                                <div class="row">
                                  <div class="col-md-12 mb-2 mb-md-0">
                                    <!-- Button to trigger the modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdfModal" data-pdf-path="<?= htmlspecialchars($client['attestation_salaire']); ?>">
                                      Afficher PDF
                                    </button>
                                    <!-- Bootstrap Modal -->
                                    <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="pdfModalLabel">PDF Viewer</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <!-- PDF Display -->
                                            <iframe id="pdfViewer" src="" width="100%" height="400px" style="border: none;"></iframe>
                                          </div>
                                          <div class="modal-footer">
                                            <!-- Download Button -->
                                            <a id="downloadPdf" href="" class="btn btn-success" download>
                                              <i class="fas fa-download"></i> Télécharger PDF
                                            </a>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <script>
                                      // Add an event listener to the modal to set the PDF path
                                      document.getElementById('pdfModal').addEventListener('show.bs.modal', function(event) {
                                        // Get the button that triggered the modal
                                        const button = event.relatedTarget;

                                        // Get the PDF path from the data-pdf-path attribute
                                        const pdfPath = button.getAttribute('data-pdf-path');

                                        // Set the PDF path in the iframe and download link
                                        const pdfViewer = document.getElementById('pdfViewer');
                                        const downloadPdf = document.getElementById('downloadPdf');

                                        pdfViewer.src = pdfPath; // Set the PDF file path in the iframe
                                        downloadPdf.href = pdfPath; // Set the PDF file path in the download link
                                      });
                                    </script>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="row align-items-center">
                              <label class="col-lg-6 form-label">Extrait Bancaire</label>
                              <div class="col-lg-6">
                                <div class="row">
                                  <div class="col-md-12 mb-2 mb-md-0">
                                    <!-- Button to trigger the modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdfModal" data-pdf-path="<?= htmlspecialchars($client['extrait_bancaire']); ?>">
                                      Afficher PDF
                                    </button>
                                    <!-- Bootstrap Modal -->
                                    <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="pdfModalLabel">PDF Viewer</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <!-- PDF Display -->
                                            <iframe id="pdfViewer" src="" width="100%" height="400px" style="border: none;"></iframe>
                                          </div>
                                          <div class="modal-footer">
                                            <!-- Download Button -->
                                            <a id="downloadPdf" href="" class="btn btn-success" download>
                                              <i class="fas fa-download"></i> Télécharger PDF
                                            </a>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <script>
                                      // Add an event listener to the modal to set the PDF path
                                      document.getElementById('pdfModal').addEventListener('show.bs.modal', function(event) {
                                        // Get the button that triggered the modal
                                        const button = event.relatedTarget;

                                        // Get the PDF path from the data-pdf-path attribute
                                        const pdfPath = button.getAttribute('data-pdf-path');

                                        // Set the PDF path in the iframe and download link
                                        const pdfViewer = document.getElementById('pdfViewer');
                                        const downloadPdf = document.getElementById('downloadPdf');

                                        pdfViewer.src = pdfPath; // Set the PDF file path in the iframe
                                        downloadPdf.href = pdfPath; // Set the PDF file path in the download link
                                      });
                                    </script>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="row align-items-center">
                              <label class="col-lg-6 form-label">Contrat</label>
                              <div class="col-lg-6">
                                <div class="row">
                                  <div class="col-md-12 mb-2 mb-md-0">
                                    <!-- Button to trigger the modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdfModal" data-pdf-path="<?= htmlspecialchars($client['contrat']); ?>">
                                      Afficher PDF
                                    </button>
                                    <!-- Bootstrap Modal -->
                                    <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="pdfModalLabel">PDF Viewer</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <!-- PDF Display -->
                                            <iframe id="pdfViewer" src="" width="100%" height="400px" style="border: none;"></iframe>
                                          </div>
                                          <div class="modal-footer">
                                            <!-- Download Button -->
                                            <a id="downloadPdf" href="" class="btn btn-success" download>
                                              <i class="fas fa-download"></i> Télécharger PDF
                                            </a>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <script>
                                      // Add an event listener to the modal to set the PDF path
                                      document.getElementById('pdfModal').addEventListener('show.bs.modal', function(event) {
                                        // Get the button that triggered the modal
                                        const button = event.relatedTarget;

                                        // Get the PDF path from the data-pdf-path attribute
                                        const pdfPath = button.getAttribute('data-pdf-path');

                                        // Set the PDF path in the iframe and download link
                                        const pdfViewer = document.getElementById('pdfViewer');
                                        const downloadPdf = document.getElementById('downloadPdf');

                                        pdfViewer.src = pdfPath; // Set the PDF file path in the iframe
                                        downloadPdf.href = pdfPath; // Set the PDF file path in the download link
                                      });
                                    </script>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <!-- end Grid With Row Label -->



                <!-- start Grid With Row Label -->
                <?php
                // Check if client has a partner
                if ($client['have_partner'] == 1) {

                  // Fetch partner details
                  $sql_partner = "SELECT * FROM partner WHERE id_client = ?";
                  $stmt_partner = $conn->prepare($sql_partner);
                  $stmt_partner->bind_param("i", $client_id);
                  $stmt_partner->execute();
                  $result_partner = $stmt_partner->get_result();

                  if ($result_partner->num_rows > 0) {
                    while ($partner = $result_partner->fetch_assoc()) {
                ?>
                      <div class="card" id="cardDiv" style="display: none;">
                        <div class="card-body p-2">
                          <h2 class="p-1 mt-3">les données du co-emprunteur</h2>
                          <form action="#">
                            <!-- <div class=" d-flex justify-content-center p-3 flex-lg-row flex-sm-column"> -->
                            <div class="d-flex flex-column justify-content-center flex-md-row flex-lg-row p-3">
                              <div class="form-body p-3 m-2 border rounded col-12 col-md-6 col-lg-7">
                                <div class="d-flex align-items-center gap-6 mb-4 justify-content-between">
                                  <span
                                    class="round-48 d-flex align-items-center justify-content-center rounded bg-icons-dashboard">
                                    <iconify-icon icon="solar:users-group-rounded-linear" width="2em" height="2em"
                                      style="color: #22825d"></iconify-icon>
                                  </span>
                                  <h6 class="mb-0 fs-4 fw-medium" style="color: #22825d">Details</h6>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-3 form-label">Nom, prénom</label>
                                    <div class="col-lg-9">
                                      <div class="row">
                                        <div class="col-md-6 mb-2 mb-md-0">
                                          <input type="text" class="form-control" placeholder="John" value="<?= htmlspecialchars($partner['nom']); ?>" readonly />
                                        </div>
                                        <div class="col-md-6">
                                          <input type="text" class="form-control" placeholder="Doe" value="<?= htmlspecialchars($partner['prenom']); ?>" readonly />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-3 form-label">Age</label>
                                    <div class="col-lg-9">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" class="form-control" placeholder="35 Ans" value="<?= htmlspecialchars($partner['age']); ?>" readonly />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-3 form-label">Téléphone</label>
                                    <div class="col-lg-9">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" class="form-control" placeholder="+1-202-555-0116" value="<?= htmlspecialchars($partner['telephone']); ?>" readonly />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-3 form-label">Email</label>
                                    <div class="col-lg-9">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" class="form-control" placeholder="john.doe@gmail.com" value="<?= htmlspecialchars($partner['email']); ?>" readonly />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-3 form-label">Adresse</label>
                                    <div class="col-lg-9">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" class="form-control"
                                            placeholder="12 rue de la Croissant. Appartement 3D. 56000" value="<?= htmlspecialchars($partner['adress']); ?>" readonly />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-3 form-label">Profession</label>
                                    <div class="col-lg-9">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" class="form-control" placeholder="Ingénieur Informatique" value="<?= htmlspecialchars($partner['profession']); ?>" readonly />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-3 form-label">Salaire Brut</label>
                                    <div class="col-lg-9">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" class="form-control" placeholder="3500€" value="<?= htmlspecialchars($partner['salaire_brut']); ?>" readonly />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-3 form-label">Statut</label>
                                    <div class="col-lg-9">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" class="form-control" placeholder="Célibataire" value="<?= htmlspecialchars($partner['statut_civil']); ?>" readonly />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-body p-3 m-2 border rounded col-12 col-md-6 col-lg-5">
                                <div class="d-flex align-items-center gap-6 mb-4 justify-content-between">
                                  <span
                                    class="round-48 d-flex align-items-center justify-content-center rounded bg-icons-dashboard">
                                    <iconify-icon icon="lets-icons:bubble" width="2em" height="2em"
                                      style="color: #22825d"></iconify-icon>
                                  </span>
                                  <h6 class="mb-0 fs-4 fw-medium" style="color: #22825d">Simulation</h6>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-6 form-label">Montant souhaité</label>
                                    <div class="col-lg-6">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" class="form-control" placeholder="150.000€" value="<?= htmlspecialchars($partner['montant_souhaite']); ?>" readonly />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-6 form-label">D.Remboursement</label>
                                    <div class="col-lg-6">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" class="form-control" placeholder="24 mois" value="<?= htmlspecialchars($partner['duree_remboursement']); ?>" readonly />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-6 form-label">Type de maison</label>
                                    <div class="col-lg-6">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" class="form-control" placeholder="520€" value="<?= htmlspecialchars($partner['type_maison']); ?>" readonly />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-6 form-label">Montant total dû</label>
                                    <div class="col-lg-6">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" class="form-control" placeholder="170.000€" value="<?= htmlspecialchars($partner['montant_total_du']); ?>" readonly />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-flex align-items-center gap-6 mb-4 justify-content-between">
                                  <span
                                    class="round-48 d-flex align-items-center justify-content-center rounded bg-icons-dashboard">
                                    <iconify-icon icon="ic:outline-book" width="2em" height="2em"
                                      style="color: #22825d"></iconify-icon>
                                  </span>
                                  <h6 class="mb-0 fs-4 fw-medium" style="color: #22825d">Documents</h6>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-6 form-label">Fichier de paie</label>
                                    <div class="col-lg-6">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <!-- Button to trigger the modal -->
                                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdfModal" data-pdf-path="<?= htmlspecialchars($partner['fichier_paie']); ?>">
                                            Afficher PDF
                                          </button>
                                          <!-- Bootstrap Modal -->
                                          <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="pdfModalLabel">PDF Viewer</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                  <!-- PDF Display -->
                                                  <iframe id="pdfViewer" src="" width="100%" height="400px" style="border: none;"></iframe>
                                                </div>
                                                <div class="modal-footer">
                                                  <!-- Download Button -->
                                                  <a id="downloadPdf" href="" class="btn btn-success" download>
                                                    <i class="fas fa-download"></i> Télécharger PDF
                                                  </a>
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <script>
                                            // Add an event listener to the modal to set the PDF path
                                            document.getElementById('pdfModal').addEventListener('show.bs.modal', function(event) {
                                              // Get the button that triggered the modal
                                              const button = event.relatedTarget;

                                              // Get the PDF path from the data-pdf-path attribute
                                              const pdfPath = button.getAttribute('data-pdf-path');

                                              // Set the PDF path in the iframe and download link
                                              const pdfViewer = document.getElementById('pdfViewer');
                                              const downloadPdf = document.getElementById('downloadPdf');

                                              pdfViewer.src = pdfPath; // Set the PDF file path in the iframe
                                              downloadPdf.href = pdfPath; // Set the PDF file path in the download link
                                            });
                                          </script>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-6 form-label">Attestation Salaire</label>
                                    <div class="col-lg-6">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <!-- Button to trigger the modal -->
                                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdfModal" data-pdf-path="<?= htmlspecialchars($partner['attestation_salaire']); ?>">
                                            Afficher PDF
                                          </button>
                                          <!-- Bootstrap Modal -->
                                          <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="pdfModalLabel">PDF Viewer</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                  <!-- PDF Display -->
                                                  <iframe id="pdfViewer" src="" width="100%" height="400px" style="border: none;"></iframe>
                                                </div>
                                                <div class="modal-footer">
                                                  <!-- Download Button -->
                                                  <a id="downloadPdf" href="" class="btn btn-success" download>
                                                    <i class="fas fa-download"></i> Télécharger PDF
                                                  </a>
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <script>
                                            // Add an event listener to the modal to set the PDF path
                                            document.getElementById('pdfModal').addEventListener('show.bs.modal', function(event) {
                                              // Get the button that triggered the modal
                                              const button = event.relatedTarget;

                                              // Get the PDF path from the data-pdf-path attribute
                                              const pdfPath = button.getAttribute('data-pdf-path');

                                              // Set the PDF path in the iframe and download link
                                              const pdfViewer = document.getElementById('pdfViewer');
                                              const downloadPdf = document.getElementById('downloadPdf');

                                              pdfViewer.src = pdfPath; // Set the PDF file path in the iframe
                                              downloadPdf.href = pdfPath; // Set the PDF file path in the download link
                                            });
                                          </script>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-6 form-label">Extrait Bancaire</label>
                                    <div class="col-lg-6">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <!-- Button to trigger the modal -->
                                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdfModal" data-pdf-path="<?= htmlspecialchars($partner['extrait_bancaire']); ?>">
                                            Afficher PDF
                                          </button>
                                          <!-- Bootstrap Modal -->
                                          <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="pdfModalLabel">PDF Viewer</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                  <!-- PDF Display -->
                                                  <iframe id="pdfViewer" src="" width="100%" height="400px" style="border: none;"></iframe>
                                                </div>
                                                <div class="modal-footer">
                                                  <!-- Download Button -->
                                                  <a id="downloadPdf" href="" class="btn btn-success" download>
                                                    <i class="fas fa-download"></i> Télécharger PDF
                                                  </a>
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <script>
                                            // Add an event listener to the modal to set the PDF path
                                            document.getElementById('pdfModal').addEventListener('show.bs.modal', function(event) {
                                              // Get the button that triggered the modal
                                              const button = event.relatedTarget;

                                              // Get the PDF path from the data-pdf-path attribute
                                              const pdfPath = button.getAttribute('data-pdf-path');

                                              // Set the PDF path in the iframe and download link
                                              const pdfViewer = document.getElementById('pdfViewer');
                                              const downloadPdf = document.getElementById('downloadPdf');

                                              pdfViewer.src = pdfPath; // Set the PDF file path in the iframe
                                              downloadPdf.href = pdfPath; // Set the PDF file path in the download link
                                            });
                                          </script>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-6 form-label">Contrat</label>
                                    <div class="col-lg-6">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <!-- Button to trigger the modal -->
                                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdfModal" data-pdf-path="<?= htmlspecialchars($partner['contrat']); ?>">
                                            Afficher PDF
                                          </button>
                                          <!-- Bootstrap Modal -->
                                          <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="pdfModalLabel">PDF Viewer</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                  <!-- PDF Display -->
                                                  <iframe id="pdfViewer" src="" width="100%" height="400px" style="border: none;"></iframe>
                                                </div>
                                                <div class="modal-footer">
                                                  <!-- Download Button -->
                                                  <a id="downloadPdf" href="" class="btn btn-success" download>
                                                    <i class="fas fa-download"></i> Télécharger PDF
                                                  </a>
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <script>
                                            // Add an event listener to the modal to set the PDF path
                                            document.getElementById('pdfModal').addEventListener('show.bs.modal', function(event) {
                                              // Get the button that triggered the modal
                                              const button = event.relatedTarget;

                                              // Get the PDF path from the data-pdf-path attribute
                                              const pdfPath = button.getAttribute('data-pdf-path');

                                              // Set the PDF path in the iframe and download link
                                              const pdfViewer = document.getElementById('pdfViewer');
                                              const downloadPdf = document.getElementById('downloadPdf');

                                              pdfViewer.src = pdfPath; // Set the PDF file path in the iframe
                                              downloadPdf.href = pdfPath; // Set the PDF file path in the download link
                                            });
                                          </script>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>

                      <script>
                        document.getElementById('toggleButton').addEventListener('click', function() {
                          var cardDiv = document.getElementById('cardDiv');
                          if (cardDiv.style.display === 'none') {
                            cardDiv.style.display = 'block';
                          } else {
                            cardDiv.style.display = 'none';
                          }
                        });
                      </script>
                      <!-- end Grid With Row Label -->


            <?php
                    }
                  } else {
                    echo "<p class='alert alert-warning'>Aucune information sur le partenaire disponible.</p>";
                  }

                  $stmt_partner->close();
                }
              } else {
                echo "<p class='alert alert-danger'>Client non trouvé.</p>";
              }
              $stmt->close();
            } else {
              echo "<p class='alert alert-warning'>Aucun client sélectionné.</p>";
            }

            $conn->close();
            ?>

            <div class="form-actions">
              <div class="text-end">
                <div class="card-body p-2 col-12">
                  <button type="submit" class="btn-declined btn text-white fw-bold m-2 col-lg-3 col-12">
                    Refusé la demande
                  </button>
                  <button type="submit" class="btn-in-progress btn text-white fw-bold m-2 col-lg-3 col-12">
                    Accepté la demande
                  </button>
                </div>
              </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
              $(document).ready(function() {
                $(".btn-declined, .btn-in-progress").click(function() {
                  var clientId = <?php echo $client_id; ?>;
                  var status, redirectUrl, confirmMessage;

                  if ($(this).hasClass("btn-declined")) {
                    status = "Annulé";
                    confirmMessage = "Voulez-vous vraiment refuser la demande ?";
                    redirectUrl = "contrat-annule.php";
                  } else if ($(this).hasClass("btn-in-progress")) {
                    status = "Signé";
                    confirmMessage = "Voulez-vous vraiment accepter la demande ?";
                    redirectUrl = "contrat-signe.php";
                  }

                  // Show confirmation alert
                  if (confirm(confirmMessage)) {
                    $.ajax({
                      url: "update_status.php",
                      type: "POST",
                      data: {
                        id: clientId,
                        statut: status
                      },
                      dataType: "json",
                      success: function(response) {
                        if (response.status === "success") {
                          window.location.href = redirectUrl;
                        } else {
                          alert("Erreur: " + response.message);
                        }
                      },
                      error: function() {
                        alert("Une erreur s'est produite.");
                      }
                    });
                  }
                });
              });
            </script>

            <div id="settlements" style="display: none;"></div>


          </div>
        </div>
      </div>
      <button class="btn btn-danger p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
        type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="icon ti ti-settings fs-7"></i>
      </button>

      <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
          <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
            Settings
          </h4>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" data-simplebar style="height: calc(100vh - 80px)">
          <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout"
              autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="light-layout">
              <i class="icon ti ti-brightness-up fs-7 me-2"></i>Light
            </label>

            <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="dark-layout">
              <i class="icon ti ti-moon fs-7 me-2"></i>Dark
            </label>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check" name="direction-l" id="ltr-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="ltr-layout">
              <i class="icon ti ti-text-direction-ltr fs-7 me-2"></i>LTR
            </label>

            <input type="radio" class="btn-check" name="direction-l" id="rtl-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="rtl-layout">
              <i class="icon ti ti-text-direction-rtl fs-7 me-2"></i>RTL
            </label>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

          <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
            <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-title="BLUE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-title="AQUA_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip"
              data-bs-placement="top" data-bs-title="PURPLE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout"
              autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip"
              data-bs-placement="top" data-bs-title="GREEN_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip"
              data-bs-placement="top" data-bs-title="CYAN_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout"
              autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip"
              data-bs-placement="top" data-bs-title="ORANGE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <div>
              <input type="radio" class="btn-check" name="page-layout" id="vertical-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary rounded-2" for="vertical-layout">
                <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical
              </label>
            </div>
            <div>
              <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary rounded-2" for="horizontal-layout">
                <i class="icon ti ti-layout-navbar fs-7 me-2"></i>Horizontal
              </label>
            </div>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="boxed-layout">
              <i class="icon ti ti-layout-distribute-vertical fs-7 me-2"></i>Boxed
            </label>

            <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="full-layout">
              <i class="icon ti ti-layout-distribute-horizontal fs-7 me-2"></i>Full
            </label>
          </div>

          <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <a href="javascript:void(0)" class="fullsidebar">
              <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary rounded-2" for="full-sidebar">
                <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full
              </label>
            </a>
            <div>
              <input type="radio" class="btn-check" name="sidebar-type" id="mini-sidebar" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary rounded-2" for="mini-sidebar">
                <i class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse
              </label>
            </div>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check" name="card-layout" id="card-with-border" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="card-with-border">
              <i class="icon ti ti-border-outer fs-7 me-2"></i>Border
            </label>

            <input type="radio" class="btn-check" name="card-layout" id="card-without-border" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="card-without-border">
              <i class="icon ti ti-border-none fs-7 me-2"></i>Shadow
            </label>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header border-bottom">
            <input type="search" class="form-control" placeholder="Search here" id="search" />
            <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
              <i class="ti ti-x fs-5 ms-3"></i>
            </a>
          </div>
          <div class="modal-body message-body" data-simplebar="">
            <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
            <ul class="list mb-0 py-2">
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Analytics</span>
                  <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard1</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">eCommerce</span>
                  <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard2</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">CRM</span>
                  <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard3</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Contacts</span>
                  <span class="fs-2 d-block text-body-secondary">/apps/contacts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Posts</span>
                  <span class="fs-2 d-block text-body-secondary">/apps/blog/posts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Detail</span>
                  <span
                    class="fs-2 d-block text-body-secondary">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Shop</span>
                  <span class="fs-2 d-block text-body-secondary">/apps/ecommerce/shop</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Modern</span>
                  <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard1</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Dashboard</span>
                  <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard2</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Contacts</span>
                  <span class="fs-2 d-block text-body-secondary">/apps/contacts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Posts</span>
                  <span class="fs-2 d-block text-body-secondary">/apps/blog/posts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Detail</span>
                  <span
                    class="fs-2 d-block text-body-secondary">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Shop</span>
                  <span class="fs-2 d-block text-body-secondary">/apps/ecommerce/shop</span>
                </a>
              </li>
            </ul>
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
  <script src="../assets/js/theme/sidebarmenu.js"></script>

  <script src="../assets/js/vendor.min.js"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/js/dashboards/dashboard1.js"></script>
  <script src="../assets/libs/fullcalendar/index.global.min.js"></script>
</body>

</html>