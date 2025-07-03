<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Sidebar toggle
document
    .getElementById("sidebarToggle")
    .addEventListener("click", function() {
        const sidebar = document.getElementById("sidebar");
        const mainContent = document.getElementById("mainContent");
        sidebar.classList.toggle("show");
    });

// Navigation
document.querySelectorAll(".nav-link").forEach((link) => {
    link.addEventListener("click", function(e) {
        e.preventDefault();

        // Remove active class from all links
        document
            .querySelectorAll(".nav-link")
            .forEach((l) => l.classList.remove("active"));
        // Add active class to clicked link
        this.classList.add("active");

        // Hide all sections
        document
            .querySelectorAll(".section")
            .forEach((section) => section.classList.remove("active"));
        // Show target section
        const targetSection = this.getAttribute("data-section");
        document.getElementById(targetSection).classList.add("active");
    });
});

// Update last updated time
document.getElementById("lastUpdated").textContent =
    new Date().toLocaleString();

// Initialize Charts
function initCharts() {
    // Sales Chart
    const salesCtx = document.getElementById("salesChart").getContext("2d");
    new Chart(salesCtx, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            datasets: [{
                label: "Sales",
                data: [12000, 19000, 15000, 25000, 22000, 30000],
                borderColor: "#3498db",
                backgroundColor: "rgba(52, 152, 219, 0.1)",
                tension: 0.4,
            }, ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                },
            },
        },
    });

    // Category Chart
    const categoryCtx = document
        .getElementById("categoryChart")
        .getContext("2d");
    new Chart(categoryCtx, {
        type: "doughnut",
        data: {
            labels: ["Fiction", "Non-Fiction", "Mystery", "Romance", "Sci-Fi"],
            datasets: [{
                data: [30, 25, 20, 15, 10],
                backgroundColor: [
                    "#3498db",
                    "#2ecc71",
                    "#f39c12",
                    "#e74c3c",
                    "#9b59b6",
                ],
            }, ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: "bottom",
                },
            },
        },
    });

    // Revenue Chart
    const revenueCtx = document
        .getElementById("revenueChart")
        .getContext("2d");
    new Chart(revenueCtx, {
        type: "bar",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            datasets: [{
                label: "Revenue",
                data: [15000, 23000, 18000, 28000, 25000, 35000],
                backgroundColor: "#2ecc71",
            }, ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                },
            },
        },
    });

    // User Growth Chart
    const userGrowthCtx = document
        .getElementById("userGrowthChart")
        .getContext("2d");
    new Chart(userGrowthCtx, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            datasets: [{
                label: "New Users",
                data: [50, 75, 60, 90, 85, 110],
                borderColor: "#e74c3c",
                backgroundColor: "rgba(231, 76, 60, 0.1)",
                tension: 0.4,
            }, ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                },
            },
        },
    });
}

// Initialize charts when page loads
document.addEventListener("DOMContentLoaded", initCharts);

// Add book form submission
document
    .querySelector("#addBookModal .btn-primary")
    .addEventListener("click", function() {
        alert("Book added successfully!");
        bootstrap.Modal.getInstance(
            document.getElementById("addBookModal")
        ).hide();
    });

// Search functionality
document.querySelectorAll(".search-box input").forEach((input) => {
    input.addEventListener("input", function() {
        // Implement search logic here
        console.log("Searching for:", this.value);
    });
});
</script>
</body>

</html>