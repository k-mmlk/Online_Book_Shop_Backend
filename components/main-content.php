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
        <div class="section active" id="dashboard">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Dashboard Overview</h2>
                <div class="text-muted">
                    Last updated: <span id="lastUpdated"></span>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row mb-4">
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="stats-card primary">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="stats-number text-primary">1,247</div>
                                <div class="stats-label">Total Books</div>
                            </div>
                            <i class="fas fa-book stats-icon text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="stats-card success">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="stats-number text-success">342</div>
                                <div class="stats-label">Orders Today</div>
                            </div>
                            <i class="fas fa-shopping-cart stats-icon text-success"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="stats-card warning">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="stats-number text-warning">$12,847</div>
                                <div class="stats-label">Revenue Today</div>
                            </div>
                            <i class="fas fa-dollar-sign stats-icon text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="stats-card danger">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="stats-number text-danger">2,847</div>
                                <div class="stats-label">Active Users</div>
                            </div>
                            <i class="fas fa-users stats-icon text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Row -->
            <div class="row mb-4">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Sales Overview</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <canvas id="salesChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Top Categories</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <canvas id="categoryChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Recent Orders</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Books</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#ORD-001</td>
                                    <td>John Doe</td>
                                    <td>3</td>
                                    <td>$67.99</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                    <td>2024-01-15</td>
                                </tr>
                                <tr>
                                    <td>#ORD-002</td>
                                    <td>Jane Smith</td>
                                    <td>1</td>
                                    <td>$24.99</td>
                                    <td><span class="badge bg-warning">Processing</span></td>
                                    <td>2024-01-15</td>
                                </tr>
                                <tr>
                                    <td>#ORD-003</td>
                                    <td>Mike Johnson</td>
                                    <td>2</td>
                                    <td>$45.98</td>
                                    <td><span class="badge bg-info">Shipped</span></td>
                                    <td>2024-01-14</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Books Management Section -->
        <div class="section" id="books">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Books Management</h2>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBookModal">
                    <i class="fas fa-plus me-2"></i>Add New Book
                </button>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h5 class="mb-0">All Books</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="search-box ms-auto">
                                <input type="text" class="form-control" placeholder="Search books..." />
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Cover</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="/placeholder.svg?height=50&width=35" alt="Book" class="rounded" />
                                    </td>
                                    <td>The Great Adventure</td>
                                    <td>John Smith</td>
                                    <td>Fiction</td>
                                    <td>$19.99</td>
                                    <td>45</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary btn-action">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger btn-action">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="/placeholder.svg?height=50&width=35" alt="Book" class="rounded" />
                                    </td>
                                    <td>Mystery of the Lost City</td>
                                    <td>Sarah Johnson</td>
                                    <td>Mystery</td>
                                    <td>$24.99</td>
                                    <td>12</td>
                                    <td><span class="badge bg-warning">Low Stock</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary btn-action">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger btn-action">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category Management Section -->
        <div class="section" id="category">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Category Management</h2>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                    <i class="fas fa-plus me-2"></i>Add New Category
                </button>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h5 class="mb-0">All Category</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="search-box ms-auto">
                                <input type="text" class="form-control" placeholder="Search category..." />
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>

                                    <th>Title</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>The Great Adventure</td>

                                    <td>
                                        <button class="btn btn-sm btn-outline-primary btn-action">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger btn-action">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Mystery of the Lost City</td>

                                    <td>
                                        <button class="btn btn-sm btn-outline-primary btn-action">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger btn-action">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Orders Section -->
        <div class="section" id="orders">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Orders Management</h2>
                <div class="btn-group">
                    <button class="btn btn-outline-secondary active">All</button>
                    <button class="btn btn-outline-secondary">Pending</button>
                    <button class="btn btn-outline-secondary">Processing</button>
                    <button class="btn btn-outline-secondary">Shipped</button>
                    <button class="btn btn-outline-secondary">Completed</button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Email</th>
                                    <th>Items</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#ORD-001</td>
                                    <td>John Doe</td>
                                    <td>john@example.com</td>
                                    <td>3</td>
                                    <td>$67.99</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                    <td>2024-01-15</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary btn-action">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-secondary btn-action">
                                            <i class="fas fa-print"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#ORD-002</td>
                                    <td>Jane Smith</td>
                                    <td>jane@example.com</td>
                                    <td>1</td>
                                    <td>$24.99</td>
                                    <td><span class="badge bg-warning">Processing</span></td>
                                    <td>2024-01-15</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary btn-action">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-secondary btn-action">
                                            <i class="fas fa-print"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Users Section -->
        <div class="section" id="users">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Users Management</h2>
                <button class="btn btn-primary">
                    <i class="fas fa-user-plus me-2"></i>Add New User
                </button>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Avatar</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Joined</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="/placeholder.svg?height=40&width=40" alt="User" class="user-avatar" />
                                    </td>
                                    <td>John Doe</td>
                                    <td>john@example.com</td>
                                    <td><span class="badge bg-primary">Customer</span></td>
                                    <td>
                                        <i class="fas fa-circle status-online"></i> Online
                                    </td>
                                    <td>2024-01-10</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary btn-action">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger btn-action">
                                            <i class="fas fa-ban"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="/placeholder.svg?height=40&width=40" alt="User" class="user-avatar" />
                                    </td>
                                    <td>Jane Smith</td>
                                    <td>jane@example.com</td>
                                    <td><span class="badge bg-success">Admin</span></td>
                                    <td>
                                        <i class="fas fa-circle status-offline"></i> Offline
                                    </td>
                                    <td>2024-01-08</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary btn-action">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger btn-action">
                                            <i class="fas fa-ban"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Analytics Section -->
        <div class="section" id="analytics">
            <h2 class="mb-4">Analytics & Reports</h2>

            <div class="row mb-4">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Monthly Revenue</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <canvas id="revenueChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">User Growth</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <canvas id="userGrowthChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Inventory Section -->
        <div class="section" id="inventory">
            <h2 class="mb-4">Inventory Management</h2>

            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="stats-card warning">
                        <div class="text-center">
                            <div class="stats-number text-warning">23</div>
                            <div class="stats-label">Low Stock Items</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-card danger">
                        <div class="text-center">
                            <div class="stats-number text-danger">5</div>
                            <div class="stats-label">Out of Stock</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-card success">
                        <div class="text-center">
                            <div class="stats-number text-success">1,219</div>
                            <div class="stats-label">In Stock</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-card primary">
                        <div class="text-center">
                            <div class="stats-number text-primary">$45,230</div>
                            <div class="stats-label">Total Value</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Stock Alerts</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Book</th>
                                    <th>Current Stock</th>
                                    <th>Minimum Stock</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>The Great Adventure</td>
                                    <td>5</td>
                                    <td>10</td>
                                    <td><span class="badge bg-warning">Low Stock</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">Reorder</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mystery Novel</td>
                                    <td>0</td>
                                    <td>5</td>
                                    <td><span class="badge bg-danger">Out of Stock</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-danger">
                                            Urgent Reorder
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Settings Section -->
        <div class="section" id="settings">
            <h2 class="mb-4">Settings</h2>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">General Settings</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Store Name</label>
                                    <input type="text" class="form-control" value="BookHaven" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Store Email</label>
                                    <input type="email" class="form-control" value="admin@bookhaven.com" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Currency</label>
                                    <select class="form-select">
                                        <option>USD ($)</option>
                                        <option>EUR (€)</option>
                                        <option>GBP (£)</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    Save Changes
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Notification Settings</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="emailNotifications" checked />
                                <label class="form-check-label" for="emailNotifications">
                                    Email Notifications
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="orderAlerts" checked />
                                <label class="form-check-label" for="orderAlerts">
                                    New Order Alerts
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="stockAlerts" checked />
                                <label class="form-check-label" for="stockAlerts">
                                    Low Stock Alerts
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Update Preferences
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>