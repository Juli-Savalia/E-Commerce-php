<?php
// Start the session
session_start();

// Check if the user is logged in (optional, for extra security)
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

// If the logout button is clicked, destroy the session
if (isset($_POST['logout'])) {
    session_destroy(); // Destroy all session data
    header("Location: login.php"); // Redirect to login page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Logout</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navigation Bar (optional) -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Admin Panel</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="settings.php">Settings</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Logout Confirmation -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-body text-center">
                    <h3 class="card-title">Logout</h3>
                    <p class="card-text">Are you sure you want to log out?</p>
                    <form method="POST" action="">
                        <button type="submit" name="logout" class="btn btn-danger">Logout</button>
                        <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
