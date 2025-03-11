<?php
require_once 'auth-admin.php';
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
                                            <h5 class="mb-0 fs-12"><?= htmlspecialchars($admin['nom']) ?> <span class="text-success fs-11"><?= strtoupper(htmlspecialchars($admin['role'])) ?>
                                                </span>
                                            </h5>
                                            <p class="mb-0 text-dark">
                                                <?= htmlspecialchars($admin['email']) ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="message-body">
                                        <a href="profile.php" class="p-2 dropdown-item h6 rounded-1">
                                            Profil
                                        </a>

                                        <?php
                                        include 'db.php';

                                        // Check if any document is unread
                                        $query = "SELECT COUNT(*) as unread_count_payment FROM payment WHERE has_been_read_admin = 0";
                                        $result = $conn->query($query);
                                        $row = $result->fetch_assoc();
                                        $hasUnreadPayment = ($row['unread_count_payment'] > 0);
                                        ?>
                                        <a href="paiment.php" class="p-2 dropdown-item h6 rounded-1">
                                        Paiements<?php if ($hasUnreadPayment) : ?>
                                                <iconify-icon icon="material-symbols:notifications-unread-rounded" width="1.2em" height="1.2em" style="color: #e52727"></iconify-icon>
                                            <?php endif; ?>
                                        </a>

                                        <?php
                                        include 'db.php';

                                        // Check if any document is unread
                                        $query = "SELECT COUNT(*) as unread_count FROM required_documents WHERE has_been_read_admin = 0";
                                        $result = $conn->query($query);
                                        $row = $result->fetch_assoc();
                                        $hasUnread = ($row['unread_count'] > 0);
                                        ?>
                                        <a href="notifications.php" class="p-2 dropdown-item h6 rounded-1">
                                            Notifications <?php if ($hasUnread) : ?>
                                                <iconify-icon icon="material-symbols:notifications-unread-rounded" width="1.2em" height="1.2em" style="color: #e52727"></iconify-icon>
                                            <?php endif; ?>
                                        </a>

                                        <?php
                                        // Check if the user role is 'topadmin'
                                        if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'topadmin'):
                                        ?>
                                            <a href="parametres.php" class="p-2 dropdown-item h6 rounded-1">
                                                Paramètres
                                            </a>
                                        <?php
                                        endif;
                                        ?>

<a href="logout.php" class="p-2 dropdown-item h6 rounded-1">
    Déconnexion
</a>

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