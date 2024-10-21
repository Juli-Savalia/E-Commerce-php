<?php
session_start();

// Static admin credentials
$static_username = 'admin';
$static_password = 'admin123';

// If the form is submitted
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the entered credentials match the static credentials
    if ($username === $static_username && $password === $static_password) {
        // Login successful
        $_SESSION['admin'] = $username; // Store username in session
        header('Location: dashboard.php'); // Redirect to admin dashboard
        exit();
    } else {
        // Invalid login
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-lg p-5">
                <h3 class="text-center mb-4 text-lg font-bold">Zara Admin Login</h3>
                <form method="POST" action="">
                    <?php if (isset($error)) { echo "<div class='alert alert-danger'>$error</div>"; } ?>
                    <div class="form-group mb-3">
                        <label for="username" class="text-sm font-semibold">Username:</label>
                        <input type="text" class="form-control border-gray-300 focus:ring-2 focus:ring-blue-500 rounded-md" id="username" name="username" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="password" class="text-sm font-semibold">Password:</label>
                        <input type="password" class="form-control border-gray-300 focus:ring-2 focus:ring-blue-500 rounded-md" id="password" name="password" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary w-full py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md">Login</button>
                </form>
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
