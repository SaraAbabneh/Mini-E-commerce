<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add a New Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .h2_pro {
            text-align: center;
            margin-top: 20px;
        }

        .form_pro {
            width: 30%;
            margin: 50px auto;
            padding: 50px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form_pro .form-group {
            margin-bottom: 20px;
        }

        .form_pro label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form_pro .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form_pro textarea.form-control {
            resize: vertical;
        }

        .form_pro .btn-primary {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form_pro .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2 class="h2_pro">Add a New Product</h2>
    <form action="process_product.php" class="w-25 mx-auto mt-5 form_pro" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" class="form-control" name="product_name" required>
        </div>

        <div class="form-group">
            <label for="product_image">Product Image:</label>
            <input type="file" id="product_image" class="form-control" name="product_image" required>
        </div>

        <div class="form-group">
            <label for="product_description">Product Description:</label>
            <textarea id="product_description" class="form-control" name="product_description" rows="4" cols="50" required></textarea>
        </div>

        <div class="form-group">
            <label for="product_price">Product Price:</label>
            <input type="number" id="product_price" class="form-control" name="product_price" step="0.01" required>
        </div>

        <button type="submit" value="Add Product" class="btn btn-primary">Add Product</button>
    </form>
</body>
</html>
