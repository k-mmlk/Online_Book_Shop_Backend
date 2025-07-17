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