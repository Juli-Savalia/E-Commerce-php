<?php
include('db_connect.php'); // Include the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $product_id = $_POST['product_id'];
   $quantity = $_POST['quantity'];

   // Insert the product into the cart table
   $query = "insert into cart (product_id, quantity) value ($product_id, $quantity)";
   $result = mysqli_query($con, $query);

   if ($result) {
      // Redirect to the cart page or show a success message
      header('Location: Cart.php');
   } else {
      echo "Error: " . mysqli_error($con);
   }
}
?>
