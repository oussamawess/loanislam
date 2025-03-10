
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



                <!-- <li class="sidebar-item">
                                        <a class="sidebar-link" href="user-notifications.php" id="get-url" aria-expanded="false">
                                            <iconify-icon icon="cuida:notification-bell-outline"></iconify-icon>
                                            <span class="hide-menu">Notifications</span>

                                            <!?php if ($unread_notifications): ?>
                                                <iconify-icon icon='mynaui:one-waves-solid' width='1.2em' height='1.2em' style='color: #e52727'></iconify-icon>
                                            <!?php endif; ?>
                                        </a>
                                    </li> -->

                <!-- <li class="sidebar-item">
                  <a class="sidebar-link" href="notifications.php" id="get-url" aria-expanded="false">
                    <iconify-icon icon="cuida:notification-bell-outline"></iconify-icon>
                    <span class="hide-menu">Notifications</span>
                  </a>
                </li> -->

                <li class="sidebar-item">
                  <a class="sidebar-link" href="profile.php" id="get-url" aria-expanded="false">
                    <iconify-icon icon="gg:profile"></iconify-icon>
                    <span class="hide-menu">Profil</span>
                  </a>
                </li>

                <!-- <li class="sidebar-item">
                  <a class="sidebar-link" href="parametres.php" id="get-url" aria-expanded="false">
                    <iconify-icon icon="solar:settings-outline"></iconify-icon>
                    <span class="hide-menu">Paramètres</span>
                  </a>
                </li> -->
                <?php
                // Check if the user role is 'topadmin'
                if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'topadmin'): 
                ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="parametres.php" id="get-url" aria-expanded="false">
                            <iconify-icon icon="solar:settings-outline"></iconify-icon>
                            <span class="hide-menu">Paramètres</span>
                        </a>
                    </li>
                <?php
                endif; 
                ?>

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
                // Check if 'id' is set in the URL
                if (isset($_GET['id'])) {
                  $client_id_link = $_GET['id']; // Get the 'id' value directly from the URL (e.g., 's10')
                } else {
                  echo "";
                }
                ?>


                <li class="sidebar-item d-none">
                  <a class="sidebar-link" href="update_admin.php" id="get-url" aria-expanded="false"></a>

                  <a style="display: none;" href="consulter-nouvelles-demandes.php?id=<?= htmlspecialchars($client_id_link); ?>" id="get-url" class="sidebar-link" aria-expanded="false"></a>
                  <a class="sidebar-link" href="consulter-nouvelles-demandes.php" id="get-url" aria-expanded="false"></a>

                  <a style="display: none;" href="consulter-en-attente-detude.php?id=<?= htmlspecialchars($client_id_link); ?>" id="get-url" class="sidebar-link" aria-expanded="false"></a>
                  <a class="sidebar-link" href="consulter-en-attente-detude.php" id="get-url" aria-expanded="false"></a>

                  <a style="display: none;" href="consulter-etude-en-cours.php?id=<?= htmlspecialchars($client_id_link); ?>" id="get-url" class="sidebar-link" aria-expanded="false"></a>
                  <a class="sidebar-link" href="consulter-etude-en-cours.php" id="get-url" aria-expanded="false"></a>

                  <a style="display: none;" href="consulter-en-attente-signature-contrat.php?id=<?= htmlspecialchars($client_id_link); ?>" id="get-url" class="sidebar-link" aria-expanded="false"></a>
                  <a class="sidebar-link" href="consulter-en-attente-signature-contrat.php" id="get-url" aria-expanded="false"></a>

                  <a style="display: none;" href="consulter.php?id=<?= htmlspecialchars($client_id_link); ?>" id="get-url" class="sidebar-link" aria-expanded="false"></a>
                  <a class="sidebar-link" href="consulter.php" id="get-url" aria-expanded="false"></a>
                </li>

                
              </ul>
            </nav>

            