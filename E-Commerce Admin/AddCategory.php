<?php
include('connect.php');
if(isset($_POST['submit'])){
    $category_name = $_POST['category_name'];
    $query = "INSERT INTO categories (category_name) VALUES ('$category_name')";
    if(mysqli_query($con, $query)){
        $message = "<div class='alert alert-success text-center mt-3' role='alert'>Category added successfully!</div>";
    } else {
        $message = "<div class='alert alert-danger text-center mt-3' role='alert'>Error: " . mysqli_error($con) . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px;
        }
        .form-control {
            border-radius: 10px;
        }
        .btn-primary {
            border-radius: 10px;
            padding: 10px 0;
        }
        .card-header {
            border-radius: 15px 15px 0 0;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Display message if available -->
            <?php if(isset($message)) echo $message; ?>

            <div class="card shadow">
                <div class="card-header bg-dark text-white text-center">
                    <h3>Add New Category</h3>
                </div>
                <div class="card-body">
                    <form action="AddCategory.php" method="post">
                        <div class="mb-3">
                            <label for="category_name" class="form-label">Category Name:</label>
                            <input type="text" id="category_name" name="category_name" class="form-control" placeholder="Enter category name" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-dark w-100">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
