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