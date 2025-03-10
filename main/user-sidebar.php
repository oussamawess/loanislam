<?php
require_once 'auth-user.php';
?>

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
            <a class="sidebar-link" href="user-profile.php" id="get-url" aria-expanded="false">
                <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                <span class="hide-menu">Profil</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="user-profile.php" id="get-url" aria-expanded="false">
                <iconify-icon icon="gg:profile"></iconify-icon>
                <span class="hide-menu">Profil</span>
            </a>
        </li>

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

        <li class="sidebar-item">
            <a class="sidebar-link" href="user-notifications.php" id="get-url" aria-expanded="false">
                <iconify-icon icon="cuida:notification-bell-outline"></iconify-icon>
                <span class="hide-menu">Notifications</span>

                <?php if ($unread_notifications): ?>
                    <iconify-icon icon="material-symbols:notifications-unread-rounded" width="1.2em" height="1.2em" style="color: #e52727"></iconify-icon>
                <?php endif; ?>
            </a>
        </li>



        <li class="sidebar-item">
            <a class="sidebar-link" href="user-parametres.php" id="get-url" aria-expanded="false">
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

        <a style="display: none;" href="update_user.php" id="get-url" class="sidebar-link" aria-expanded="false"></a>

    </ul>
</nav>