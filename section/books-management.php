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