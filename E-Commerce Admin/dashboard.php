<?php
session_start();

// Check if the admin is logged in
if (!isset($_SESSION['admin'])) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
} else {
    include('connect.php'); // Include your database connection file

    // Fetch counts from the database
    $user_count_query = "SELECT COUNT(*) as total_users FROM users";
    $order_count_query = "SELECT COUNT(*) as total_orders FROM orders";
    $product_count_query = "SELECT COUNT(*) as total_products FROM products";
    $category_count_query = "SELECT COUNT(*) as total_categories FROM categories";

    $total_users = get_count($con, $user_count_query, 'total_users');
    $total_orders = get_count($con, $order_count_query, 'total_orders');
    $total_products = get_count($con, $product_count_query, 'total_products');
    $total_categories = get_count($con, $category_count_query, 'total_categories');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <?php include('Sidebar.php'); ?>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 page-header">
                        <div class="page-pretitle">Overview</div>
                        <h2 class="page-title">Dashboard</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="icon-big text-center">
                                            <i class="teal fas fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="detail">
                                            <p class="detail-subtitle">Total Users</p>
                                            <span class="number"><?php echo $total_users; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="fas fa-calendar"></i> Updated Recently
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="icon-big text-center">
                                            <i class="olive fas fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="detail">
                                            <p class="detail-subtitle">Total Orders</p>
                                            <span class="number"><?php echo $total_orders; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="fas fa-calendar"></i> Updated Recently
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="icon-big text-center">
                                            <i class="violet fas fa-box"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="detail">
                                            <p class="detail-subtitle">Total Products</p>
                                            <span class="number"><?php echo $total_products; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="fas fa-calendar"></i> Updated Recently
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="icon-big text-center">
                                            <i class="orange fas fa-tags"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="detail">
                                            <p class="detail-subtitle">Total Categories</p>
                                            <span class="number"><?php echo $total_categories; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="fas fa-calendar"></i> Updated Recently
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>

<?php
}

// Function to get counts
function get_count($connection, $query, $column_name) {
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Database query failed: " . mysqli_error($connection));
    }
    $row = mysqli_fetch_assoc($result);
    return $row[$column_name];
}
?>
