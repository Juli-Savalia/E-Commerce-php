<?php
include('db_connect.php');

// Handle delete action if requested
if (isset($_POST['delete'])) {
    $product_id = $_POST['product_id'];

    // Delete product from cart
    $delete_query = "DELETE FROM cart WHERE product_id = $product_id";
    if (mysqli_query($con, $delete_query)) {
        // Redirect to avoid form resubmission on page refresh
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error deleting product: " . mysqli_error($con);
    }
}

// Fetch products from cart with details including category
$query = "
   SELECT p.id as product_id, p.product_name, p.price, p.image, p.category, c.quantity
   FROM cart c
   JOIN products p ON c.product_id = p.id";
$result = mysqli_query($con, $query);

// Error handling
if (!$result) {
    die("Error in query: " . mysqli_error($con));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Bag</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../Styles/Utility.css" />
    <link rel="stylesheet" href="../Styles/bootstrap.min.css" />
    <link rel="stylesheet" href="../Styles/FadeSlider.css" />
    <link rel="stylesheet" href="../Styles/output.css" />
    <link rel="stylesheet" href="../Styles/Home.css">
</head>
<body>
    <div class="px-3">
    <?php include('Header.php') ?>
    </div>
    <div class="bg-gray-100">
        <div class="max-w-4xl mx-auto p-6">
            <h1 class="text-2xl font-bold mb-2">Shopping Bag</h1>
            <p class="text-gray-600 mb-6">
                <span class="font-bold">
                    <?php echo mysqli_num_rows($result); ?> items
                </span> in your bag.
            </p>
            <div class="bg-white rounded-lg shadow p-6">
                <div class="grid grid-cols-12 gap-4 mb-4">
                    <div class="col-span-5 font-bold">Product</div>
                    <div class="col-span-2 font-bold">Price</div>
                    <div class="col-span-2 font-bold">Quantity</div>
                    <div class="col-span-2 font-bold">Total Price</div>
                    <div class="col-span-1 font-bold">Actions</div>
                </div>

                <!-- Display Cart Items Dynamically -->
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($cart_item = mysqli_fetch_assoc($result)) {
                        // Calculate the total price per item (price * quantity)
                        $total_price = $cart_item['price'] * $cart_item['quantity'];
                ?>
                <div class="border-b pb-4 mb-4">
                    <div class="grid grid-cols-12 gap-4 items-center">
                        <div class="col-span-5 flex items-center">
                            <img alt="<?php echo $cart_item['product_name']; ?>" 
                                class="w-20 h-20 rounded-lg mr-4" 
                                src="..\Images\<?php echo $cart_item['category']; ?>\<?php echo $cart_item['image']; ?>" 
                                width="100" height="100">
                            <div>
                                <p class="text-sm text-gray-500">Product</p>
                                <p class="font-bold"><?php echo $cart_item['product_name']; ?></p>
                            </div>
                        </div>
                        <div class="col-span-2">
                            $<?php echo number_format($cart_item['price'], 2); ?>
                        </div>
                        <div class="col-span-2">
                            <?php echo $cart_item['quantity']; ?>
                        </div>
                        <div class="col-span-2 text-orange-500 font-bold">
                            $<?php echo number_format($total_price, 2); ?>
                        </div>
                        <div class="col-span-1">
                            <!-- Delete Form -->
                            <form method="POST" action="">
                                <input type="hidden" name="product_id" value="<?php echo $cart_item['product_id']; ?>">
                                <button type="submit" name="delete" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
                    }
                } else {
                    echo "<p>Your cart is empty.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
