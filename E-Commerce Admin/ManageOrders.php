<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit();
}

include('connect.php'); // Include database connection

// Handle filter
$filter = isset($_GET['filter']) && $_GET['filter'] != 'All' ? $_GET['filter'] : '';
$query = "select * from orders";
if ($filter) {
    $query .= " WHERE payment_method = '$filter'";
}
$query .= " ORDER BY order_date DESC";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Orders</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-6">Manage Orders</h1>

        <!-- Filter Form -->
        <form method="GET" action="ManageOrders.php" class="mb-6">
            <select name="filter" class="form-control w-full mb-4">
                <option value="All">All Payment Methods</option>
                <option value="Credit Card">Credit Card</option>
                <option value="Debit Card">Debit Card</option>
                <option value="PayPal">PayPal</option>
                <option value="Cash on Delivery">Cash on Delivery</option>
            </select>
            <button type="submit" class="btn-main bg-blue-600 text-white py-2 px-4 rounded">Filter</button>
        </form>

        <div class="bg-white p-8 rounded shadow-lg">
            <table class="table-auto w-full">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2">Order ID</th>
                        <th class="px-4 py-2">Product</th>
                        <th class="px-4 py-2">Customer Address</th>
                        <th class="px-4 py-2">Payment Method</th>
                        <th class="px-4 py-2">Total Price</th>
                        <th class="px-4 py-2">Order Date</th>
                        <th class="px-4 py-2">Actions</th> <!-- Add a new column for actions -->
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($result) > 0): ?>
                        <?php while ($order = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td class="border px-4 py-2"><?php echo $order['id']; ?></td>
                                <td class="border px-4 py-2"><?php echo $order['product_name']; ?></td>
                                <td class="border px-4 py-2"><?php echo $order['customer_address']; ?></td>
                                <td class="border px-4 py-2"><?php echo $order['payment_method']; ?></td>
                                <td class="border px-4 py-2">$<?php echo $order['total_price']; ?></td>
                                <td class="border px-4 py-2"><?php echo $order['order_date']; ?></td>
                                <td class="border px-4 py-2">
                                    <!-- Cancel Order Button -->
                                    <?php if ($order['Status'] != 'Canceled'): ?>
                                    <form method="POST" action="CancelOrders.php">
                                        <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">
                                        <button type="submit" class="bg-red-600 text-white py-1 px-3 rounded">Cancel</button>
                                    </form>
                                    <?php else: ?>
                                        <span class="text-red-600 font-bold">Canceled</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="border px-4 py-2 text-center">No orders found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
