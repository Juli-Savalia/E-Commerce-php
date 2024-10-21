<?php
session_start();
include('db_connect.php'); // Include the database connection

$error_message = ''; // Variable to store the error message

// Check if form is submitted
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check the email and password in the database
    $query = mysqli_query($con, "select * from users where email='$email'");

    // If user exists
    if ($query && mysqli_num_rows($query) > 0) {
        $user = mysqli_fetch_array($query);
        
        // Verify password
        if ($password === $user['password']) {
            // Password is correct, start a session
            $_SESSION['userid'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header('Location: homes.php'); // Redirect to home page
            exit();
        } else {
            $error_message = 'Invalid password. Please try again.';
        }
    } else {
        $error_message = 'No user found with that email address.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../Styles/Utility.css">
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white rounded-xl shadow-lg flex max-w-4xl w-full">
            <!-- Left Section (Info) -->
            <div class="w-1/2 p-8 bg-orange-100 rounded-tl-xl rounded-bl-xl">
                <h2 class="text-3xl font-bold text-white mb-4">Simplify management with our dashboard.</h2>
                <p class="text-white mb-8">
                    Simplify your e-commerce management with our user-friendly admin dashboard.
                </p>
                <img src="placeholder-image.jpg" alt="Dashboard Illustration" class="rounded-lg">
            </div>

            <!-- Right Section (Form) -->
            <div class="w-1/2 p-8 flex flex-col justify-center">
                <div class="text-center">
                    <img src="../Images/logo.png" alt="Logo" class="mx-auto mb-4 h-20">
                    <h2 class="text-2xl font-bold">Welcome Back</h2>
                    <p class="text-gray-500 mb-8">Please login to your account</p>
                </div>

                <!-- Display error message if login fails -->
                <?php if (!empty($error_message)): ?>
                    <div class="bg-red-500 text-white p-4 rounded mb-4">
                        <?php echo $error_message; ?>
                    </div>
                <?php endif; ?>

                <!-- Login Form -->
                <form action="signIn.php" method="post" class="space-y-4">
                    <div>
                        <label for="email" class="block text-gray-700">Email address</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="Enter your email" required />
                    </div>

                    <div>
                        <label for="password" class="block text-gray-700">Password</label>
                        <input type="password" id="password" name="password" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="Enter your password" required />
                    </div>

                    <div class="flex justify-between items-center">
                        <a href="#" class="">Forgot password?</a>
                    </div>

                    <!-- Login Button -->
                    <button type="submit" name="submit" class="w-full bg-maincolor text-white py-2 rounded-md hover:bg-orange-600">Login</button>

                    <!-- Or Login With -->
                    <div class="text-center text-gray-500 my-4">Or Login with</div>

                    <!-- Social Logins -->
                    <div class="flex space-x-4">
                        <button class="w-full flex items-center justify-center px-4 py-2 border border-gray-300 rounded-md">
                            <img src="../Images/search.png" alt="Google" class="w-5 h-5 mr-2"> Google
                        </button>
                        <button class="w-full flex items-center justify-center px-4 py-2 border border-gray-300 rounded-md">
                            <img src="../Images/facebook.png" alt="Facebook" class="w-5 h-5 mr-2"> Facebook
                        </button>
                    </div>
                </form>

                <!-- Footer Text -->
                <div class="text-center mt-6">
                    <p class="text-gray-500">Don’t have an account? <a href="SignUp.php" class="text-orange-500">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
