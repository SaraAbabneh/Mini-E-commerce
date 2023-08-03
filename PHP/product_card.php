<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Product Cards</title>
    <style>
        .product-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 300px;
            display: inline-block;
        }

        .product-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .product-name {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .product-description {
            margin-bottom: 10px;
        }

        .product-price {
            color: green;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    // Loop through the products and display them as cards
    foreach ($_SESSION['products'] as $product) {
        echo '<div class="product-card">';
        echo '<img class="product-image" src="../image/' . trim($product['img'], 'uploads/') . '" alt="' . $product['name'] . '">';
        echo '<div class="product-name">' . $product['name'] . '</div>';
        echo '<div class="product-description">' . $product['desc'] . '</div>';
        echo '<div class="product-price">$' . $product['price'] . '</div>';
        echo '</div>';

        // echo($product['img']);
        echo (trim($product['img'], 'uploads/'));
    }
    ?>
</body>

</html>