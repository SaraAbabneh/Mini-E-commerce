<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h2>Add a New Product</h2>
    <form action="process_product.php" method="post" enctype="multipart/form-data">
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" Required><br>

        <label for="product_image">Product Image:</label>
        <input type="file" id="product_image" name="product_image" Required><br>

        <label for="product_description">Product Description:</label><br>
        <textarea id="product_description" name="product_description" rows="4" cols="50" Required></textarea><br>

        <label for="product_price">Product Price:</label>
        <input type="number" id="product_price" name="product_price" step="0.01" Required><br>

        <input type="submit" value="Add Product">
    </form>
</body>
</html>
