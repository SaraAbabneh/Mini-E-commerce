<?php
session_start();

require_once('../HTML/navbar.php');
require_once('../HTML/slider.php');
require_once('form.php');

echo "<table class='table table-striped'>";
echo "<thead>";
echo "<tr>";
echo "<th>Product Name</th>";
echo "<th>Product Description</th>";
echo "<th>Product Price</th>";
echo "<th>Product Image</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

if (isset($_SESSION['products']) && is_array($_SESSION['products'])) {
    foreach ($_SESSION['products'] as $product) {
        echo '<tr>';
        echo '<td>' . $product['name'] . '</td>';
        echo '<td>' . $product['desc'] . '</td>';
        echo '<td>' . $product['price'] . '</td>';
        echo '<td><img class="product-image" src="../image/' .trim($product['img'], 'uploads/') . '" width="100px" height="100px" alt="' . $product['name'] . '"></td>';
        echo '</tr>';
    }
}

echo "</tbody>";
echo "</table>";

require_once('../HTML/Footer.php');
?>
