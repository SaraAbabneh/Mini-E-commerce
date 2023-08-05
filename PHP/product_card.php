<?php
//product_card.php
session_start();
require_once('../HTML/navbar.php');
require_once('../HTML/slider.php');




?>
<!DOCTYPE html>
<html>

<head>
    <title>Product Cards</title>
    <style>
        .product-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 30px;
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
    // Loop  the products and display  as cards
    if (isset($_SESSION['products']) && is_array($_SESSION['products'])) {
        foreach ($_SESSION['products'] as $product) {
            echo '<div class="product-card" >';
            echo '<img class="product-image" src="../image/' . trim($product['img'], 'uploads/') . '" alt="' . $product['name'] . '">';
            echo '<div class="product-name">' . $product['name'] . '</div>';
            echo '<div class="product-description">' . $product['desc'] . '</div>';
            echo '<div class="product-price">$' . $product['price'] . '</div>';
            echo '</div>';

            // echo($product['img']);
            // echo (trim($product['img'], 'uploads/'));
        }
    } else {
        
        echo "<p style='margin-left:45%;margin-top:10px;'>No products found</p>";
    } // if statment to prevent from error Undefined array key "products
    echo'<br>';
    echo'<br>';
    echo'<br>';
    echo "<a href='display_products.php' style='margin-left:25%;'><button style='width: 50%; padding: 10px;  background: #007BFF; padding: 10px; border:none ;border-radius: 4px; margin-top: 20px;color: #fff;'>Home</button></a>";
    ?>
        
  
    
  
    
</body>

</html>

<?php
require_once('../HTML/footer.php');

?>