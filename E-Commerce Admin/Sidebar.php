<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
        <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
        <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/master.css" rel="stylesheet">
        <!-- jQuery (required for Bootstrap 4) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link href="assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
</head>
<body>
  
            <nav id="sidebar" class="active">
                <ul class="list-unstyled components text-secondary">
                    <li>
                        <a href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#authmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i> Authentication</a>
                        <ul class="collapse list-unstyled" id="authmenu">
                            <li>
                                <a href="login.php"><i class="fas fa-lock"></i> Login</a>
                            </li>
                            <li>
                                <a href="forgot-password.php"><i class="fas fa-user-lock"></i> Forgot password</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pagesmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i> Products</a>
                        <ul class="collapse list-unstyled" id="pagesmenu">
                            <li>
                                <a href="List.php"><i class="fas fa-file"></i>Proucts List</a>
                            </li>
                            <li>
                                <a href="AddCategory.php"><i class="fas fa-info-circle"></i> Add Category</a>
                            </li>
                            <li>
                                <a href="AddProducts.php"><i class="fas fa-info-circle"></i> Add Products</a>
                            </li>
                            <li>
                                <a href="EditProducts.php"><i class="fas fa-info-circle"></i> Edit Products</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#ordersmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i>Orders</a>
                        <ul class="collapse list-unstyled" id="ordersmenu">
                            <li>
                                <a href="blank.html"><i class="fas fa-file"></i>Order List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="users.php"><i class="fas fa-user-friends"></i>Users</a>
                    </li>
                    <li>
                        <a href="settings.php"><i class="fas fa-cog"></i>Settings</a>
                    </li>
                </ul>
            </nav>
            <div id="body" class="active">
                <!-- navbar navigation component -->
                <nav class="navbar navbar-expand-lg navbar-white bg-white">
                    <button type="button" id="sidebarCollapse" class="btn btn-light">
                        <i class="fas fa-bars"></i><span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <div class="nav-dropdown">
                                    <a href="Logout.php" id="nav1" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                       <span>Logout</span> 
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end nav-link-menu" aria-labelledby="nav1">
                                        <ul class="nav-list">
                                            <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <div class="nav-dropdown">
                                    <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                        <ul class="nav-list">
                                            <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                            <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                            <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="Logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
</body>
</html>