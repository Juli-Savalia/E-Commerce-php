<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php'); // Redirect if not logged in
    exit();
}

include('connect.php'); // Include database connection

// Update stock status if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = mysqli_real_escape_string($con, $_POST['product_id']);
    $stock_status = mysqli_real_escape_string($con, $_POST['stock_status']);
    
    $query = "update products set stock_status = '$stock_status' WHERE id = '$product_id'";
    $result = mysqli_query($con, $query);

    if ($result) {
        // Redirect back to the manage products page with a success message
        header('Location: Index.php?message=Stock%20Status%20Updated');
    } else {
        // Redirect with an error message
        header('Location: Index.php?error=Error%20Updating%20Stock%20Status');
    }
    exit();
}

// Fetch all products
$query = "SELECT * FROM products";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Stock</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-3xl font-bold mb-8 text-center text-gray-700">Manage Product Stock Status</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="py-3 px-6 text-gray-600 font-semibold uppercase tracking-wider border-b">Product ID</th>
                    <th class="py-3 px-6 text-gray-600 font-semibold uppercase tracking-wider border-b">Product Name</th>
                    <th class="py-3 px-6 text-gray-600 font-semibold uppercase tracking-wider border-b">Current Stock Status</th>
                    <th class="py-3 px-6 text-gray-600 font-semibold uppercase tracking-wider border-b">Update Status</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($product = mysqli_fetch_assoc($result)) { ?>
                <tr class="hover:bg-gray-50">
                    <td class="border px-6 py-4"><?php echo $product['id']; ?></td>
                    <td class="border px-6 py-4"><?php echo $product['product_name']; ?></td>
                    <td class="border px-6 py-4">
                        <?php if ($product['stock_status'] == 'In Stock'): ?>
                            <span class="text-green-600 font-semibold">In Stock</span>
                        <?php else: ?>
                            <span class="text-red-600 font-semibold">Out of Stock</span>
                        <?php endif; ?>
                    </td>
                    <td class="border px-6 py-4">
                        <form method="POST" action="ManageStock.php" class="flex items-center">
                            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                            <select name="stock_status" class="form-select block w-48 mr-2 p-2 border-gray-300 rounded-md shadow-sm">
                                <option value="In Stock" <?php if ($product['stock_status'] == 'In Stock') echo 'selected'; ?>>In Stock</option>
                                <option value="Out of Stock" <?php if ($product['stock_status'] == 'Out of Stock') echo 'selected'; ?>>Out of Stock</option>
                            </select>
                            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200">Update</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
