<?php
include('db_connect.php'); // Include the database connection

// Assuming category_id = 1 for KidsWear
$category_id = 5;  // Change this based on which category you're filtering for

// Fetch product data from the database using category_id
$query = "select * from products WHERE category_id = $category_id";
$result = mysqli_query($con, $query);

// Error handling
if (!$result) {
    die("Error in query: " . mysqli_error($con)); // This will terminate the script and print the error.
}

// Count the number of products
$product_count = mysqli_num_rows($result);
?>

<html>
<head>
    <title>KidsWear</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../Styles/Utility.css" />
    <link rel="stylesheet" href="../Styles/bootstrap.min.css" />
    <link rel="stylesheet" href="../Styles/FadeSlider.css" />
    <link rel="stylesheet" href="../Styles/output.css" />
    <link rel="stylesheet" href="../Styles/Home.css">
</head>

<body class="bg-gray-100">

        <!-- Main Content -->
        <div class="w-full h-screen overflow-y-auto">
            <!-- Header -->
            <?php include('Header.php'); ?>
            <div class="p-8">
                <div class="container mx-auto">
                    <nav class="text-sm text-gray-600 mb-4">
                        <a class="hover:underline" href="#">Home</a> &gt;
                        <a class="hover:underline" href="#">Fashion</a> &gt;
                        <span>KidsWear</span>
                    </nav>

                    <h1 class="text-2xl font-semibold mb-2">KidsWear</h1>
                    <p class="text-gray-600 mb-4">We denounce with righteous indignation and dislike men who are so beguiled...</p>

                    <div class="flex justify-between items-center mb-4">
                        <div class="flex items-center">
                            <button id="grid-view-btn" class="mr-2">
                                <i class="fas fa-th-large text-gray-600"></i>
                            </button>
                            <button id="list-view-btn" class="mr-2">
                                <i class="fas fa-list text-gray-600"></i>
                            </button>
                            <!-- Dynamically display product count -->
                            <span>There are <?php echo $product_count; ?> products.</span>
                        </div>
                    </div>

                    <div id="product-container">
                        <h1 class="text-3xl font-bold mb-6">KidsWear</h1>

                        <!-- Check if products are available -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <?php if ($product_count > 0): ?>
                                <?php while ($product = mysqli_fetch_assoc($result)): ?>
                                    <div class="bg-white shadow-md rounded p-4">
                                        <img src="Images/KidsTop/<?php echo $product['image']; ?>"
                                             alt="<?php echo $product['product_name']; ?>"
                                             class="w-[135px] mx-auto h-auto object-cover mb-4" />
                                        <h2 class="text-xl font-semibold">
                                            <?php echo $product['product_name']; ?>
                                        </h2>
                                        <p class="mt-2 text-gray-600 text-sm">
                                            <?php echo $product['description']; ?>
                                        </p>
                                        <p class="mt-4 text-green-600">$<?php echo $product['price']; ?></p>
                                        
                                        <?php if ($product['stock_status'] == 'Out of Stock'): ?>
                                            <button class="btn bg-red-500 text-white py-2 px-4 mt-4 cursor-not-allowed" disabled>Out of Stock</button>
                                            <button class="btn bg-gray-500 text-white py-2 px-4 mt-4 cursor-not-allowed" disabled>Buy Now</button>
                                        <?php else: ?>
                                            <button class="btn-main block rounded-full w-100 text-center mt-3 h-10 pt-1"
                                                    data-id="<?php echo $product['id']; ?>"
                                                    onclick="openModal(<?php echo $product['id']; ?>)">Add To Cart</button>

                                            <form action="BuyNow.php" method="GET">
                                                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                                <input type="hidden" name="product_name" value="<?php echo $product['product_name']; ?>">
                                                <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                                                <button type="submit" class="btn-main bg-green-600 text-white rounded-full w-100 text-center mt-3 h-10 pt-1">
                                                    Buy Now
                                                </button>
                                            </form>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <p>No products found in this category.</p>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
    </div>
    
    <!-- Modal Structure -->
    <div id="productModal" class="fixed inset-0 bg-gray-800 h-screen bg-opacity-75 hidden justify-center items-center">
        <div class="bg-white h-100 p-5 rounded-lg w-96 relative">
            <span id="closeModal" class="absolute top-2 right-2 cursor-pointer text-gray-600">&times;</span>
            <img id="modalImage" src="" alt="Product Image" class="w-36 h-48 object-cover mb-4">
            <h2 id="modalTitle" class="text-xl font-semibold"></h2>
            <p id="modalDescription" class="text-gray-600 mt-2"></p>
            <p id="modalPrice" class="text-green-600 mt-4"></p>
            <form action="AddCart.php" method="POST">
                <input type="hidden" name="product_id" id="modalProductId">
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" id="quantity" min="1" value="1" class="border p-2 w-full mb-4">
                <button type="submit" class="btn-main w-full py-2">Add to Cart</button>
            </form>
        </div>
    </div>

    <script>
        function openModal(productId) {
            const productCard = document.querySelector(`[data-id='${productId}']`).parentElement;
            const image = productCard.querySelector('img').src;
            const title = productCard.querySelector('h2').textContent;
            const description = productCard.querySelector('p').textContent;
            const price = productCard.querySelector('.text-green-600').textContent;

            document.getElementById('modalImage').src = image;
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalDescription').textContent = description;
            document.getElementById('modalPrice').textContent = price;
            document.getElementById('modalProductId').value = productId;

            document.getElementById('productModal').classList.remove('hidden');
        }

        document.getElementById('closeModal').onclick = function () {
            document.getElementById('productModal').classList.add('hidden');
        };
    </script>

</body>

</html>
