<?php
include('connect.php');

// Fetch all products from the database
$query = "SELECT * FROM products";
$result = mysqli_query($con, $query);

// Handle delete operation
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];

    // Delete product query
    $delete_query = "DELETE FROM products WHERE id = $delete_id";
    if (mysqli_query($con, $delete_query)) {
        echo "<script>alert('Product deleted successfully');</script>";
        echo "<script>window.location.href = 'Index.php';</script>";
    } else {
        echo "<script>alert('Error deleting product');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex">
    <?php include('Sidebar.php'); ?>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Products List</h1>
            <!-- Add Product Button -->
            <a href="AddProducts.php" class="btn btn-success">Add New Product</a>
        </div>
        
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td>
                            <?php 
                                $category_id = $row['category_id'];
                                $category_query = "SELECT category_name FROM categories WHERE id = $category_id";
                                $category_result = mysqli_query($con, $category_query);
                                $category = mysqli_fetch_assoc($category_result);
                                echo $category['category_name']; 
                            ?>
                        </td>
                        <td>$<?php echo $row['price']; ?></td>
                        <td>
                            <img src="Images/<?php echo $row['image']; ?>" alt="Product Image" width="100">
                        </td>
                        <td>
                            <a href="EditProducts.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="Index.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
