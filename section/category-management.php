<div class="section" id="category">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Category Management</h2>
        <a href="/components/add-category.php" class="btn btn-primary">Add Category</a>
        <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
            <i class="fas fa-plus me-2"></i>Add New Category
        </button> -->
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