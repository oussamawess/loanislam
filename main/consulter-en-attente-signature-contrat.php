<?php
require_once 'auth-admin.php';
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
        <h5 class="text-white fs-3 mb-1">bienvenue <!?= htmlspecialchars($admin['nom']) ?></h5>
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
                    <h2 class="p-1 mt-3">En attente signature contrat: Demande <?= htmlspecialchars($client['id']); ?></h2>
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
                          <!-- START required documents -->
                          <hr>
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
                              $client = $result->fetch_assoc(); // Fetch client details

                              // Fetch required documents where status = 'uploaded'
                              $doc_sql = "SELECT * FROM required_documents WHERE id_client = ? AND status = 'uploaded'";
                              $doc_stmt = $conn->prepare($doc_sql);
                              $doc_stmt->bind_param("i", $client_id);
                              $doc_stmt->execute();
                              $doc_result = $doc_stmt->get_result();

                              // Display documents if found
                              if ($doc_result->num_rows > 0) {
                                echo "<h3>Documents requis</h3>";
                                echo "<ul>";
                                while ($doc = $doc_result->fetch_assoc()) {
                                  $doc_id = htmlspecialchars($doc['id']);
                                  $file_path = htmlspecialchars($doc['file_path']);
                                  $label = htmlspecialchars($doc['label']);

                                  echo "<div class='mb-3'>
                            <div class='row align-items-center'>
                              <label class='col-lg-6 form-label'>$label</label>
                              <div class='col-lg-6'>
                                <div class='row'>
                                  <div class='col-md-12 mb-2 mb-md-0'>
                                    <!-- Button to trigger the modal -->
<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#pdfModal-$doc_id' data-pdf-path='$file_path'>Afficher PDF</button>

                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>";


                                  // Modal for each document
                                  echo "<div class='modal fade' id='pdfModal-$doc_id' tabindex='-1' aria-labelledby='pdfModalLabel-$doc_id' aria-hidden='true'>
                        <div class='modal-dialog modal-lg'>
                          <div class='modal-content'>
                            <div class='modal-header'>
                              <h5 class='modal-title' id='pdfModalLabel-$doc_id'>PDF Viewer</h5>
                              <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <div class='modal-body'>
                              <iframe id='pdfViewer-$doc_id' src='' width='100%' height='400px' style='border: none;'></iframe>
                            </div>
                            <div class='modal-footer'>
                              <a id='downloadPdf-$doc_id' href='' class='btn btn-success' download>
                                <i class='fas fa-download'></i> Télécharger PDF
                              </a>
                              <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Fermer</button>
                            </div>
                          </div>
                        </div>
                      </div>";
                                }
                                echo "</ul>";
                              } else {
                                echo "<p>Aucun document requis n'a été téléchargé.</p>";
                              }
                            } else {
                              echo "<p>Client not found.</p>";
                            }
                          } else {
                            echo "<p>Invalid request.</p>";
                          }
                          ?>

                          <script>
                            // Ensure JavaScript runs after the DOM is fully loaded
                            document.addEventListener("DOMContentLoaded", function() {
                              document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
                                button.addEventListener("click", function() {
                                  let pdfPath = this.getAttribute("data-pdf-path");
                                  let modalId = this.getAttribute("data-bs-target");
                                  let modal = document.querySelector(modalId);
                                  let pdfViewer = modal.querySelector("iframe");
                                  let downloadPdf = modal.querySelector("a[download]");

                                  pdfViewer.src = pdfPath; // Set PDF file path in iframe
                                  downloadPdf.href = pdfPath; // Set PDF file path in download link
                                });
                              });
                            });
                          </script>
                          <!-- END required documents -->
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
                  
                  <a href="en-attente-signature-contrat.php" class="btn-in-pause btn text-white fw-bold m-2 col-lg-3 col-12">
                    Retour
                  </a>
                  <button type="submit" class="btn-declined btn text-white fw-bold m-2 col-lg-3 col-12">
                    Refusé la demande
                  </button>
                </div>
              </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
              $(document).ready(function() {
                $(".btn-declined, .btn-in").click(function() {
                  var clientId = <?php echo $client_id; ?>;
                  var status, redirectUrl, confirmMessage;

                  if ($(this).hasClass("btn-declined")) {
                    status = "Annulé";
                    confirmMessage = "Voulez-vous vraiment refuser la demande ?";
                    redirectUrl = "contrat-annule.php";
                  } else if ($(this).hasClass("btn-in")) {
                    status = "En cours";
                    confirmMessage = "Voulez-vous vraiment changer le statut en 'En cours' ?";
                    redirectUrl = "etude-en-cours.php";
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