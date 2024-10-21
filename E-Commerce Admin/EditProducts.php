<?php
include('connect.php');

// Check if product ID is passed through URL
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Fetch existing product details
    $query = "SELECT * FROM products WHERE id = $product_id";
    $result = mysqli_query($con, $query);
    $product = mysqli_fetch_assoc($result);

    // If form is submitted, handle the update
    if (isset($_POST['submit'])) {
        $product_name = mysqli_real_escape_string($con, $_POST['product_name']);
        $category_id = mysqli_real_escape_string($con, $_POST['category_id']);
        $description = mysqli_real_escape_string($con, $_POST['description']);
        $price = mysqli_real_escape_string($con, $_POST['price']);

        // Handle image upload (optional)
        if (!empty($_FILES['image']['name'])) {
            $target_dir = "Images/";
            $image = basename($_FILES['image']['name']);
            $target_file = $target_dir . $image;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                echo "<div class='alert alert-success'>Image uploaded successfully!</div>";
            } else {
                echo "<div class='alert alert-danger'>Error uploading image!</div>";
                $image = $product['image']; // Keep the old image if upload fails
            }
        } else {
            $image = $product['image']; // Keep the old image if no new image is uploaded
        }

        // Update product details in the database
        $update_query = "update products 
                         set product_name = '$product_name', category_id = '$category_id', description = '$description', price = '$price', image = '$image' 
                         WHERE id = $product_id";

        if (mysqli_query($con, $update_query)) {
            echo "<div class='alert alert-success mt-3'>Product updated successfully!</div>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Error updating product: " . mysqli_error($con) . "</div>";
        }
    }
} else {
    echo "<div class='alert alert-warning mt-3'>No product ID provided.</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex wrapper">
    <?php include('Sidebar.php'); ?>
    <div class="container mt-5 content">
        <h1 class="mb-4">Edit Product</h1>
        <form action="" method="POST" enctype="multipart/form-data" class="bg-light p-5 rounded shadow-sm">
            <div class="form-group">
                <!-- Product Name -->
                <label for="product_name">Product Title:</label>
                <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo $product['product_name']; ?>" required>
            </div>

            <div class="form-group">
                <!-- Description -->
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required><?php echo $product['description']; ?></textarea>
            </div>

            <div class="form-group">
                <!-- Category -->
                <label for="category">Category:</label>
                <select class="form-control" id="category" name="category_id" required>
                    <?php
                    $categories = mysqli_query($con, "SELECT * FROM categories");
                    while ($row = mysqli_fetch_assoc($categories)) {
                        $selected = $row['id'] == $product['category_id'] ? 'selected' : '';
                        echo "<option value='{$row['id']}' $selected>{$row['category_name']}</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <!-- Price -->
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price" name="price" value="<?php echo $product['price']; ?>" required>
            </div>

            <div class="form-group">
                <!-- Image -->
                <label for="image">Product Image:</label>
                <input type="file" class="form-control-file" id="image" name="image">
                <p>Current Image: <img src="Images/<?php echo $product['image']; ?>" alt="Product Image" width="100"></p>
            </div>

            <div class="form-group text-right">
                <button type="submit" name="submit" class="btn btn-primary">Update Product</button>
            </div>
        </form>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
