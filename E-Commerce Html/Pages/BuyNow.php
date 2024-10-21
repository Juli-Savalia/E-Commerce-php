<?php
// If product_id is not set, redirect back to products page
if (!isset($_GET['product_id'])) {
    header('Location: Electronics.php');
    exit();
}

$product_id = $_GET['product_id'];
$product_name = $_GET['product_name'];
$price = $_GET['price'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Now</title>
    <link rel="stylesheet" href="../Styles/Utility.css">
    <!-- Internal CSS -->
    <style>
        /* Bootstrap-like styles */
        .form-control {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .max-w-lg {
            max-width: 32rem;
        }

        .bg-white {
            background-color: #fff;
        }

        .bg-gray-100 {
            background-color: #f7fafc;
        }

        .p-8 {
            padding: 2rem;
        }

        .rounded {
            border-radius: 0.25rem;
        }

        .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175);
        }

        .text-2xl {
            font-size: 1.5rem;
        }

        .font-bold {
            font-weight: 700;
        }

        .mb-6 {
            margin-bottom: 1.5rem;
        }

        .btn-main {
            background-color: #007bff;
            border: none;
        }

        .text-white {
            color: #fff;
        }

        .w-full {
            width: 100%;
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .h-12 {
            height: 3rem;
        }

        .rounded-md {
            border-radius: 0.375rem;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .block {
            display: block;
        }

        .mt-1 {
            margin-top: 0.25rem;
        }

        .text-sm {
            font-size: 0.875rem;
        }

        .font-medium {
            font-weight: 500;
        }

        .text-gray-700 {
            color: #4a5568;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/cswors/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../Styles/Utility.css" />
    <link rel="stylesheet" href="../Styles/bootstrap.min.css" />
    <link rel="stylesheet" href="../Styles/FadeSlider.css" />
    <link rel="stylesheet" href="../Styles/output.css" />
    <link rel="stylesheet" href="../Styles/Home.css">
</head>

<body>
    <?php include('Header.php'); ?>
    <div class="bg-gray-100 py-4">
        <div class="container mx-auto">
            <div class="max-w-lg mx-auto bg-white p-8 rounded shadow-lg">
                <h1 class="text-2xl font-bold mb-6">Buy Now - <?php echo $product_name; ?></h1>
                <form action="ConfirmOrder.php" method="POST">
                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $product_name; ?>">
                    <input type="hidden" name="price" value="<?php echo $price; ?>">

                    <!-- Address -->
                    <div class="mb-4">
                        <label for="address" class="block text-sm font-medium text-gray-700">Shipping Address</label>
                        <textarea name="address" id="address" rows="4" class="form-control mt-1" required></textarea>
                    </div>

                    <!-- Payment Method -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Payment Method</label>
                        <select name="payment_method" class="form-control mt-1" required>
                            <option value="Credit Card">Credit Card</option>
                            <option value="Debit Card">Debit Card</option>
                            <option value="PayPal">PayPal</option>
                            <option value="Cash on Delivery">Cash on Delivery</option>
                        </select>
                    </div>

                    <!-- Total Price -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Total Price</label>
                        <input type="text" value="$<?php echo $price; ?>" readonly class="form-control mt-1">
                    </div>

                    <button type="submit" class="btn-main text-white w-full py-2 h-12 rounded-md">Confirm Order</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
