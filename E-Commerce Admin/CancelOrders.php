<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit();
}

include('connect.php'); // Include database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $order_id = mysqli_real_escape_string($con, $_POST['order_id']);
    
    // Update the order status to 'Canceled'
    $query = "UPDATE orders SET status = 'Canceled' WHERE id = '$order_id'";
    $result = mysqli_query($con, $query);
    
    if ($result) {
        // Redirect back to the Manage Orders page with success message
        header('Location: ManageOrders.php?message=Order%20Canceled%20Successfully');
    } else {
        // Redirect with error message
        header('Location: ManageOrders.php?error=Error%20Canceling%20Order');
    }
    exit();
}
?>
