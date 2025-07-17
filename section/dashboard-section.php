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