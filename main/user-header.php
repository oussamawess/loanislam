<?php
require_once 'auth-user.php';
?>

<?php
require_once 'db.php'; // Database connection

// Check if the user is logged in and is a client
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'client') {
    // Redirect to login page if the user is not a client
    header('Location: login.php');
    exit();
}

// Retrieve client ID from session
$client_id = $_SESSION['client_id'];

// Fetch additional data for the client from the client table
$sql = "SELECT * FROM client WHERE id = ?"; // Fetch from the 'client' table, not 'user'
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $client_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $client = $result->fetch_assoc();}

?>

<header class="topbar">
    <div class="with-vertical">
        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Header -->
        <!-- ---------------------------------- -->
        <nav class="navbar navbar-expand-lg p-0">
            <ul class="navbar-nav">
                <li class="nav-item d-flex d-xl-none">
                    <a class="nav-link nav-icon-hover-bg rounded-circle  sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                        <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-6"></iconify-icon>
                    </a>
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
                                            <h5 class="mb-0 fs-12"><?= htmlspecialchars($client['nom']); ?> <?= htmlspecialchars($client['prenom']); ?>
                                            </h5>
                                            <p class="mb-0 text-dark">
                                            <?= htmlspecialchars($client['email']); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="message-body">
                                        <a href="user-profile.php" class="p-2 dropdown-item h6 rounded-1">
                                            Profil
                                        </a>
                                        <a href="../main/page-pricing.html" class="p-2 dropdown-item h6 rounded-1">
                                            My Subscription
                                        </a>

                                        <?php
        // Check if there are unread notifications
        $notif_sql = "SELECT COUNT(*) AS unread_count FROM required_documents WHERE id_client = ? AND has_been_read = 0";
        $notif_stmt = $conn->prepare($notif_sql);
        $notif_stmt->bind_param("i", $client_id);
        $notif_stmt->execute();
        $notif_result = $notif_stmt->get_result();
        $notif_data = $notif_result->fetch_assoc();
        $unread_notifications = $notif_data['unread_count'] > 0;
        ?>
                                        <a href="user-notifications.php" class="p-2 dropdown-item h6 rounded-1">
                                            Notifications <?php if ($unread_notifications): ?>
                    <iconify-icon icon="material-symbols:notifications-unread-rounded" width="1.2em" height="1.2em" style="color: #e52727"></iconify-icon>
                <?php endif; ?>
                                        </a>
                                        <a href="user-parametres.php" class="p-2 dropdown-item h6 rounded-1">
                                            Paramètres
                                        </a>
                                        <a href="javascript:void(0);" id="logout-link" class="p-2 dropdown-item h6 rounded-1">
                                            Déconnexion
                                        </a>

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

                                        
                        <!-- <li class="sidebar-item">
                            <a class="sidebar-link" href="javascript:void(0);" id="logout-link" aria-expanded="false">
                                <iconify-icon icon="solar:logout-2-outline"></iconify-icon>
                                <span class="hide-menu">Déconnexion</span>
                            </a>
                        </li> -->
                </div>
            </div>
    </div>
    </li>
    </ul>
    </div>
    </div>
    </nav>
    </div>

</header>