<?php
include('connect.php');
if (isset($_POST['submit'])) {
    $product_name = $_POST['product_name'];
    // $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    

    // Handle file upload (image)
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image']['name'];
        $target_dir = "Images/";  // Define the directory where images will be uploaded
        $target_file = $target_dir . basename($image);
        
        // Move uploaded file to the designated directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            echo "Image uploaded successfully!";
        } else {
            echo "Error uploading image!";
        }
    } else {
        echo "No image uploaded!";
        $image = null;
    }

    // Insert product information into the database
    $query = "insert into products (product_name, description, price, image,category) 
              values ('$product_name', '$description', '$price', '$image','$category')";

    if (mysqli_query($con, $query)) {
        echo "Product added successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Product</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Styles/output.css">
</head>

<body>
    <div class="wrapper">
        <?php include('Sidebar.php'); ?>
        <!-- Form to add product -->
        <div class="content">
            <div class="bg-gray-100 p-8">
               <div class="d-flex flex-wrap justify-between">
                   <h1 class="text-3xl font-bold">Add New Product</h1>
               </div>
               <form action="" method="POST" enctype="multipart/form-data">
                <div class="d-flex flex-wrap justify-between py-5">
                    <div class="col-7 pb-3">
                        <div class="col-span-2 bg-white p-6 rounded-lg shadow">
                            <h2 class="text-xl font-semibold mb-4">Basic</h2>
                            <!-- Product title -->
                            <div class="mb-4">
                                <label class="block text-gray-700">Product title</label>
                                <input class="w-full mt-2 p-2 border rounded bg-gray-100" placeholder="Type here"
                                    type="text" name="product_name" required />
                            </div>
                            <!-- Description -->
                            <div class="mb-4">
                                <label class="block text-gray-700">Full description</label>
                                <textarea class="w-full mt-2 p-2 border rounded bg-gray-100 h-32" name="description" placeholder="Type here" required></textarea>
                            </div>
                            <!-- Category -->
                            <div class="mb-4">
                                <label for="category">Category:</label>
                                <select class="w-full mt-2 p-2 border rounded bg-gray-100 h-32" id="category" name="category" required>
                                    <?php
                                    $categories = mysqli_query($con, "SELECT * FROM categories");
                                    while ($row = mysqli_fetch_assoc($categories)) {
                                        echo "<option value='{$row['category_name']}'>{$row['category_name']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="grid grid-cols-3 gap-4 mb-4">
                                <!-- Regular price -->
                                <div>
                                    <label class="block text-gray-700">Regular price</label>
                                    <input class="w-full mt-2 p-2 border rounded bg-gray-100" placeholder="$"
                                        type="text" name="price" required />
                                </div>
                                <!-- Promotional price  -->
                                <div>
                                    <label class="block text-gray-700">Promotional price</label>
                                    <input class="w-full mt-2 p-2 border rounded bg-gray-100" placeholder="$"
                                        type="text" name="promoprice" />
                                </div>
                                <div>
                                    <label class="block text-gray-700">Currency</label>
                                    <select class="w-full mt-2 p-2 border rounded bg-gray-100">
                                        <option>USD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700">Tax rate</label>
                                <input class="w-full mt-2 p-2 border rounded bg-gray-100" placeholder="%"
                                    type="text" name="taxrate" />
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="bg-white p-6 rounded-lg shadow mb-3">
                            <h2 class="text-xl font-semibold mb-4">Media</h2>
                            <div class="flex justify-center items-center mb-4">
                                <img alt="Upload icon" class="w-24 h-24" height="100"
                                    src="https://storage.googleapis.com/a1aa/image/0Tvs4cGKqQLpKlJI5j8A3xOaIoDVwc2sHAbNGET9Pt1feZlTA.jpg"
                                    width="100" />
                            </div>
                            <div class="flex items-center">
                                <!-- File input for image -->
                                <input type="file" name="image" required />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" name="submit" class="btn btn-success">Add Product</button>
                </div>
               </form>
            </div>
        </div>
    </div>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
