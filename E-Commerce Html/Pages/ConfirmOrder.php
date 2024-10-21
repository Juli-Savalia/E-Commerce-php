<?php
include('db_connect.php'); // Include database connection

// Check if form is submitted
if (!isset($_POST['product_id'])) {
    header('Location: Electronics.php');
    exit();
}

// Get form data
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$price = $_POST['price'];
$address = $_POST['address'];
$payment_method = $_POST['payment_method'];

// Insert order into the database
$query = "insert into orders (product_id, product_name, customer_address, payment_method, total_price) 
          values ('$product_id', '$product_name', '$address', '$payment_method', '$price')";
$result = mysqli_query($con, $query);

if ($result) {
    // After saving the order, redirect to a thank you page
    header('Location: ThankYou.php');
    exit();
} else {
    echo "Error: " . mysqli_error($con); // Display error if query fails
}
?>
