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