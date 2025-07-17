<div class="main-content" id="mainContent">
    <!-- Header -->
    <header class="header">
        <button class="btn btn-link d-md-none" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>
        <div class="search-box ms-3">
            <input type="text" class="form-control" placeholder="Search..." />
            <i class="fas fa-search"></i>
        </div>
        <div class="ms-auto d-flex align-items-center">
            <div class="dropdown me-3">
                <button class="btn btn-link position-relative" data-bs-toggle="dropdown">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">3</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">New order received</a></li>
                    <li><a class="dropdown-item" href="#">Low stock alert</a></li>
                    <li><a class="dropdown-item" href="#">New user registered</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn btn-link d-flex align-items-center" data-bs-toggle="dropdown">
                    <img src="/placeholder.svg?height=35&width=35" alt="Admin" class="user-avatar me-2" />
                    <span>Admin User</span>
                    <i class="fas fa-chevron-down ms-2"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Settings</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Content -->
    <div class="content">
        <!-- Dashboard Section -->
        <?php include "./section/dashboard-section.php" ?>

        <!-- Books Management Section -->
        <?php include "./section/books-management.php" ?>
        <!-- Category Management Section -->
        <?php include "./section/category-management.php" ?>

        <!-- Orders Section -->
        <?php include "./section/order-section.php" ?>



        <!-- Users Section -->
        <?php include "./section/users-section.php" ?>


        <!-- Analytics Section -->
        <?php include "./section/analytics-section.php" ?>


        <!-- Inventory Section -->
        <?php include "./section/inventory-section.php" ?>


        <!-- Settings Section -->
        <?php include "./section/settings-section.php" ?>

    </div>
</div>