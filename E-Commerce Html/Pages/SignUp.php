<?php
session_start();
include('db_connect.php'); // Include the database connection

if (isset($_POST['submit'])) { // Check if form is submitted
    $username = $_POST['first_name'] . ' ' . $_POST['last_name']; // Combine first and last name
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert user details into the users table
    $query = mysqli_query($con, "insert into users (username, email, password) values ('$username', '$email', '$password')");

    if ($query) {
        // Get the user's ID and name for session storage
        $query2 = mysqli_query($con, "select * from users where email='$email' && password='$password'");
        $ret = mysqli_fetch_array($query2);

        // If a user is found, set the session and redirect
        if ($ret > 0) {
            $_SESSION['userid'] = $ret['id'];
            $_SESSION['username'] = $ret['username'];
            header('Location: signIn.php'); // Redirect to sign-in page
        }
    } else {
        echo '<div class="alert alert-danger">Registration Failed! Please try again.</div>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../Styles/Utility.css">
</head>
<body class="bg-gray-100">
    <div class="w-3/4 mx-auto bg-white shadow-lg p-8 mt-10 rounded-lg">
        <div class="flex flex-wrap justify-between">
            <h1 class="text-2xl font-semibold mb-6 inline-block">Create an account</h1>
            <img src="../Images/logo.png" alt="logo" class="h-20 inline-block">
        </div>
        <p class="mb-4 text-sm">Already have an account? <a href="signIn.php" class="text-blue-500">Log in instead!</a></p>

        <!-- Registration Form -->
        <form action="SignUp.php" method="post">
            <!-- Social Title -->
            <div class="mb-4">
                <label class="block text-gray-700">Social title</label>
                <div class="flex space-x-4 mt-2">
                    <label class="inline-flex items-center">
                        <input type="radio" name="title" class="form-radio text-blue-500" value="mr" required>
                        <span class="ml-2">Mr.</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="title" class="form-radio text-blue-500" value="mrs" required>
                        <span class="ml-2">Mrs.</span>
                    </label>
                </div>
            </div>

            <!-- First Name -->
            <div class="mb-4">
                <label for="first_name" class="block text-gray-700">First name</label>
                <input type="text" id="first_name" name="first_name" class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Only letters and the dot (.) character, followed by a space, are allowed." required />
            </div>

            <!-- Last Name -->
            <div class="mb-4">
                <label for="last_name" class="block text-gray-700">Last name</label>
                <input type="text" id="last_name" name="last_name" class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Only letters and the dot (.) character, followed by a space, are allowed." required />
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <div class="relative">
                    <input type="password" id="password" name="password" class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required />
                </div>
            </div>

            <!-- Sign Up Button -->
            <button type="submit" name="submit" class="mt-6 w-full bg-maincolor text-white py-2 rounded-md hover:bg-orange-600">SignUp</button>
        </form>

        <!-- Footer Text -->
        <div class="text-center mt-6">
            <p class="text-gray-500">Have an account? <a href="signIn.php" class="text-orange-500">Sign In</a></p>
        </div>
    </div>

</body>
</html>
