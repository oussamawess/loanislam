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

            <!-- START table -->
            <style>
              .search-bar {
                display: flex;
                gap: 10px;
                flex-wrap: wrap;
                padding: 15px;
                border-radius: 5px;
                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                margin-bottom: 40px !important;
              }

              /* .form-control {
                width: 20%;
                min-width: 150px;
              } */

              .table-container {
                overflow-x: auto;
              }

              .table th {
                background-color: #e9f0fe;
                color: #7aa4f8;
                cursor: pointer;
              }

              .pagination {
                display: flex;
                justify-content: center;
                margin-top: 20px;
              }

              .pagination button {
                padding: 8px 12px;
                margin: 3px;
                border: none;
                cursor: pointer;
                background-color: #7aa4f8;
                color: white;
                border-radius: 5px;
              }

              .pagination button:disabled {
                background-color: #ccc;
                cursor: not-allowed;
              }

              .sortable {
                position: relative;
              }

              .sortable::after {
                content: "↑↓";
                font-size: 14px;
                position: absolute;
                right: 5px;
                top: 50%;
                transform: translateY(-50%);
              }

              table tr td {
                color: black !important;
              }
            </style>

            <div style="background-color: white; border-radius: 15px; padding:20px; margin-bottom: 30px;">
              <div class="datatables">
                <div class="content">
                  <div class="search-bar mb-3 d-flex justify-content-center">
                    <div class="col-md-4 mb-2 mb-md-0">
                      <input type="text" id="searchInput" class="form-control" placeholder="Demandes de prets ...">
                    </div>

                    <div class="vr"></div>
                    <div class="col-md-2 mb-2 mb-md-0 d-none">
                      <select id="statusFilter" class="form-select ">
                        <option value="">Tous les statuts</option>
                        <option value="Nouvelles">Nouvelles</option>
                        <option value="En attente">En attente</option>
                        <option value="En cours">En cours</option>
                        <option value="Signé">Signé</option>
                        <option value="Annulé">Annulé</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-2 mb-md-0"><input type="date" id="startDate" class="form-control"></div>
                    <div class="col-md-3 mb-2 mb-md-0"><input type="date" id="endDate" class="form-control"></div>
                    <button id="searchButton" class="btn btn-primary" style="background-color: #22825d; border-color: #22825d;">Recherche</button>
                    <script>
                      document.addEventListener("DOMContentLoaded", function() {
                        // Get the elements
                        const startDateInput = document.getElementById("startDate");
                        const endDateInput = document.getElementById("endDate");
                        const searchButton = document.getElementById("searchButton");
                        const rows = Array.from(document.querySelectorAll("#clientTableBody tr"));

                        searchButton.addEventListener("click", function() {
                          const startDate = startDateInput.value ? new Date(startDateInput.value) : null;
                          const endDate = endDateInput.value ? new Date(endDateInput.value) : null;

                          rows.forEach(row => {
                            const dateCell = row.cells[6]; // Assuming date_creation is in the 7th column (index 6)
                            if (!dateCell) return;

                            const rowDate = new Date(dateCell.textContent.trim());

                            // Check if the row should be visible
                            const inRange = (!startDate || rowDate >= startDate) && (!endDate || rowDate <= endDate);
                            row.style.display = inRange ? "" : "none";
                          });
                        });
                      });
                    </script>
                  </div>
                </div>
                <h2>Nouvelles demandes</h2>
                <div class="table-container">
                  <?php
                  include 'db.php'; // Include database connection

                  // Fetch clients from database
                  $sql = "SELECT * FROM client WHERE statut = 'Nouvelles'";
                  $result = $conn->query($sql);
                  ?>

                  <table class="table" id="dataTable">
                    <thead>
                      <tr>
                        <th onclick="sortTable(0)">ID↑↓</th>
                        <th onclick="sortTable(1)">Nom↑↓</th>
                        <th onclick="sortTable(2)">Age↑↓</th>
                        <th onclick="sortTable(3)">Statut↑↓</th>
                        <th onclick="sortTable(4)">Salaire Brut↑↓</th>
                        <th onclick="sortTable(5)">Montant souhaité↑↓</th>
                        <th>Actions ↑↓</th>
                      </tr>
                    </thead>
                    <tbody id="clientTableBody">
                      <?php
                      if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                          echo "<tr>
                                          <td>{$row['id']}</td>
                                          <td>{$row['nom']}</td>
                                          <td>{$row['age']} Ans</td>
                                          <td>{$row['statut']}</td>
                                          <td>{$row['salaire_brut']}€</td>
                                          <td>{$row['montant_souhaite']}€</td>
                                          <td style='display: none;'>{$row['date_creation']}</td>
                                          <td>
                                            <a href='consulter-nouvelles-demandes.php?id={$row['id']}' class='btn btn-info'>Consulter</a>
                                          </td>
                                        </tr>";
                        }
                      } else {
                        echo "<tr><td colspan='7' class='text-center'>Aucun client trouvé</td></tr>";
                      }
                      ?>
                    </tbody>
                  </table>

                  <?php $conn->close(); // Close database connection 
                  ?>

                  <!-- Pagination -->
                  <nav aria-label="Page navigation">
                    <ul class="pagination" id="pagination">
                      <!-- Pagination links will be dynamically generated here -->
                    </ul>
                  </nav>
                </div>
              </div>
            </div>



            <!-- Bootstrap JS and dependencies -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
            <!-- Custom JS -->
            <script>
              // Global variables
              let rowsPerPage = 10;
              let currentPage = 1;

              // Move updateTable and updatePagination functions outside the DOMContentLoaded event listener
              function updateTable() {
                const table = document.getElementById('dataTable');
                const rows = Array.from(table.getElementsByTagName('tbody')[0].getElementsByTagName('tr'));
                for (let i = 0; i < rows.length; i++) {
                  rows[i].style.display = (i >= (currentPage - 1) * rowsPerPage && i < currentPage * rowsPerPage) ? '' : 'none';
                }
              }

              function updatePagination() {
                const table = document.getElementById('dataTable');
                const pagination = document.getElementById('pagination');
                const rows = Array.from(table.getElementsByTagName('tbody')[0].getElementsByTagName('tr'));
                const pageCount = Math.ceil(rows.length / rowsPerPage);

                pagination.innerHTML = '';
                for (let i = 1; i <= pageCount; i++) {
                  const li = document.createElement('li');
                  li.className = 'page-item' + (i === currentPage ? ' active' : '');
                  li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
                  li.addEventListener('click', function(e) {
                    e.preventDefault();
                    currentPage = i;
                    updateTable();
                    updatePagination();
                  });
                  pagination.appendChild(li);
                }
              }

              // Sort table function
              function sortTable(columnIndex) {
                const table = document.getElementById('dataTable');
                const tbody = table.getElementsByTagName('tbody')[0];
                const rows = Array.from(tbody.getElementsByTagName('tr'));

                rows.sort((a, b) => {
                  const aValue = a.getElementsByTagName('td')[columnIndex].textContent.trim();
                  const bValue = b.getElementsByTagName('td')[columnIndex].textContent.trim();

                  // Check if the values are numeric
                  if (!isNaN(aValue) && !isNaN(bValue)) {
                    return aValue - bValue;
                  } else {
                    return aValue.localeCompare(bValue, undefined, {
                      numeric: true,
                      sensitivity: 'base'
                    });
                  }
                });

                // Reverse the order if the column is already sorted
                if (tbody.getAttribute('data-sort-column') === columnIndex.toString()) {
                  rows.reverse();
                  tbody.removeAttribute('data-sort-column');
                } else {
                  tbody.setAttribute('data-sort-column', columnIndex);
                }

                // Clear the table and append sorted rows
                tbody.innerHTML = '';
                rows.forEach(row => tbody.appendChild(row));

                // Update pagination and table display
                currentPage = 1;
                updateTable();
                updatePagination();
              }

              // Initialize table and pagination
              document.addEventListener('DOMContentLoaded', function() {
                const table = document.getElementById('dataTable');
                const rows = Array.from(table.getElementsByTagName('tbody')[0].getElementsByTagName('tr'));

                // Search functionality
                document.getElementById('searchInput').addEventListener('input', filterTable);
                document.getElementById('statusFilter').addEventListener('change', filterTable);

                function filterTable() {
                  const searchFilter = document.getElementById('searchInput').value.toLowerCase();
                  const statusFilter = document.getElementById('statusFilter').value.toLowerCase();

                  for (let i = 0; i < rows.length; i++) {
                    const row = rows[i];
                    const cells = row.getElementsByTagName('td');
                    let matchSearch = true;
                    let matchStatus = true;

                    // Apply search filter
                    if (searchFilter) {
                      matchSearch = false;
                      for (let j = 0; j < cells.length; j++) {
                        if (cells[j].textContent.toLowerCase().indexOf(searchFilter) > -1) {
                          matchSearch = true;
                          break;
                        }
                      }
                    }

                    // Apply status filter
                    if (statusFilter) {
                      const statusCell = cells[3].textContent.toLowerCase(); // Assuming status is in the 4th column
                      matchStatus = statusCell === statusFilter;
                    }

                    row.style.display = (matchSearch && matchStatus) ? '' : 'none';
                  }

                  currentPage = 1;
                  updatePagination();
                }

                // Initialize table and pagination
                updateTable();
                updatePagination();
              });
            </script>
            <!-- End table -->




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